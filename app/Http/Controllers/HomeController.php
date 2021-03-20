<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Sport;
use App\Odds;
use App\Teams;
use App\Bets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['sports'] = Sport::where('active',1)->get();
        //$data['odds'] = Odds::where('commence_time','>',time())->get();
        $teams = Teams::all();

        $data['odds'] = DB::table('odds')
            ->select('odds.*','t1.id AS team1_id')
            ->where('odds.commence_time','>',time())
            ->join('teams AS t1','t1.team_name','=', 'odds.team1')
            ->get();

        foreach($data['odds'] as $it){
            $it->team2_id = '';
            foreach($teams as $it1){
                if($it->team2 == $it1->team_name){
                    $it->team2_id    = $it1->id;
                    break;
                }
            }
        }
        return view('home')->with('data', $data);
    }

    public function user_dashboard(){
        return view('user.dashboard');
    }


    public function save_bets(Request $request){

        $validator = Validator::make($request->all(),[
            'user_id' => 'required',
            'client' => 'required',
            'bets' => 'required',
            'bets_type' => 'required',
            'bets_amount' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back();
        }
        try{
            $bet = new Bets;
            $bet->user_id = $request->input('user_id');
            $bet->bets = json_encode($request->input('bets'));
            $bet->client = $request->input('client');
            $bet->bets_type = $request->input('bets_type');
            $bet->bets_amount = $request->input('bets_amount');
            $bet->save();
            return response()->json([
               'success'=>true
            ]);
        }catch (Exception $e){
            return response()->json([
               'success'=>false
            ]);
        }
    }

    public function get_bets(Request $request){
        $validator = Validator::make($request->all(),[
           'date'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back();
        }

        $bets = Bets::where('user_id', Auth::user()->id)->whereDate('created_at','=',$request->input('date'))->get();
        return response()->json([
           'success'=>true,
           'data'=>$bets
        ]);
    }

    public function bets_detail(Request $request){
        if($request->has('id')){

            $data = Bets::where('id', $request->input('id'))->get();
            return view('user.betsdetail')->with('data', $data);
        }else{
            $data = Bets::where('user_id', Auth::user()->id)->whereDate('created_at','=',Carbon::today())->get();
            return view('user.betsdetail')->with('data', $data);
        }
    }
}
