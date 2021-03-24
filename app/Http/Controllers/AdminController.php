<?php

namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Sport;
use App\Odds;
use App\Teams;
use App\Bets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Image;
class AdminController extends Controller
{
    public function index(){
        $data['users'] = User::where('is_active','1')
            ->where('role','user')
            ->get();
        $data['customer_count'] = Bets::distinct('client')->count('client');

        $total_bets_cost = Bets::select('bets_amount','payout_amount')->get();
        $data['total_submitted_bets'] = 0;
        $data['total_payouts'] = 0;
        foreach($total_bets_cost as $item){
            $data['total_submitted_bets'] += $item->bets_amount;
            $data['total_payouts'] += $item->payout_amount;
        }

        for($i=1; $i<13; $i++){
            $data['customer_'.$i] = Bets::whereBetween('created_at', [date('Y-'.$i.'-1'), date('Y-'.$i.'-31')])->distinct('client')->count('client');
            $submitted_bets = 0;
            $payouts = 0;
            $bets_month = Bets::whereBetween('created_at', [date('Y-'.$i.'-1'), date('Y-'.$i.'-31')])->select('bets_amount','payout_amount')->get();
            foreach ($bets_month as $it){
                $submitted_bets += $it->bets_amount;
                $payouts += $it->payout_amount;
            }
            $data['earning_'.$i] = $submitted_bets -$payouts;
        }
        return view('admin.index_admin')->with('data', $data);
    }

    public function users(){
        $data['users'] = DB::table('users')
            ->select('id','name','email','role','address','photo','phone','is_active','created_at')
            ->where('role','user')
            ->get();
        return view('admin.users_admin')->with('data', $data);
    }

    public function save_user(Request $request){
        $validator = Validator::make($request->all(),[
           'name'=>'required|string',
           'email'=>'required|string',
           'password'=>'required|string'
        ]);
        if($validator->fails()){
            return redirect()->back();
        }
        $users_count = User::where('email',$request->input('email'))->count();
        if($users_count > 0){
            return redirect()->back();
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        // PATHS
        $path = config('path.photo');
        //<--- HASFILE PHOTO
        if($request->hasFile('photo'))	{

            $photo     = $request->file('photo');
            $extension = $request->file('photo')->getClientOriginalExtension();
            $avatar    = strtolower(Auth::user()->name.'-'.Auth::user()->id.time().'.'.$extension );

            set_time_limit(0);
            ini_set('memory_limit', '512M');

            $imgAvatar = Image::make($photo)->orientate()->fit(300, 300, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($extension);


            // Copy folder
            Storage::put($path.$avatar, $imgAvatar, 'public');


            // Update Database
            $user->photo = $avatar;

        }//<--- HASFILE PHOTO

        $user->save();
        return redirect()->back();
    }

    public function save_edit(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required',
            'name'=>'required|string',
            'email'=>'required|string',
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }
        $user = User::where('id', $request->input('id'))->first();
        $photo_old = $user->photo;
        $path = config('path.photo');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        //<--- HASFILE PHOTO
        if($request->hasFile('photo'))	{

            $photo     = $request->file('photo');
            $extension = $request->file('photo')->getClientOriginalExtension();
            $avatar    = strtolower(Auth::user()->name.'-'.Auth::user()->id.time().'.'.$extension );

            if($avatar !== $photo_old) {

                set_time_limit(0);
                ini_set('memory_limit', '512M');

                $imgAvatar = Image::make($photo)->orientate()->fit(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode($extension);

                Storage::put($path.$avatar, $imgAvatar, 'public');
                $user->photo = $avatar;
            }
        }//<--- HASFILE PHOTO

        $user->save();
        return response()->json([
           'success'=>true,
           'user'=>$user
        ]);
    }

    public function del_user(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }
        DB::table('users')->where('id', $request->input('id'))->delete();
        return response()->json([
           'success'=>true,
        ]);
    }

    public function profile(){
        $data['admin'] = User::where('id',Auth::user()->id)->first();
        return view('admin.profile_admin')->with('data',$data);
    }

    public function save_password(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required',
            'old_password'=>'required',
            'new_password'=>'required',
            'new_pass_confirm'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }
        if($request->input('new_password') !== $request->input('new_pass_confirm')){
            return response()->json([
                'success'=>false,
                'errors' => 'Please confirm new password',
            ]);
        }
        $user = DB::table('users')->where('id', $request->input('id'))->first();
        if(!Hash::check($request->input('old_password'), $user->password)){
            return response()->json([
                'success'=>false,
                'errors' => 'Please input the old password correctly.',
            ]);
        }
        User::where('id', $user->id)->update(array('password'=>Hash::make($request->input('new_password'))));
        return redirect()->back();
    }

    public function bets(){
        $data['bets'] = Bets::orderBy('id','desc')->get();
        return view('admin.bets_admin')->with('data', $data);
    }

    public function save_payout(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }
        $bet = Bets::where('id', $request->input('id'))->first();
        $bet->payout_amount = $request->input('payout_amount');
        $bet->comment = $request->input('comment');
        $bet->save();
        return response()->json([
            'success'=>true,
            'bet'=>$bet,
        ]);
    }

    public function del_bet(Request $request){
        $validator = Validator::make($request->all(),[
            'id'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'errors' => $validator->getMessageBag()->toArray(),
            ]);
        }
        DB::table('bets')->where('id', $request->input('id'))->delete();
        return response()->json([
            'success'=>true,
        ]);
    }
}
