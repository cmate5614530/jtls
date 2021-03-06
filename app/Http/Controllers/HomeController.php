<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use App\Odds;
use App\Teams;
use App\Bets;
use Illuminate\Support\Facades\DB;

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
                    $it->team2_id = $it1->id;
                    break;
                }
            }
        }
        return view('home')->with('data', $data);
    }

    public function user_dashboard(){
        return view('user_dashboard');
    }

    public function admin_dashboard(){
        print_r('-------admin_dashboard---');
    }

    public function save_bets(Request $request){

        $this->validate($request, [
            'user_id' => 'required',
            'client' => 'required',
            'bets' => 'required',
            'bets_type' => 'required',
            'bets_amount' => 'required'
        ]);

        try{
            $bet = new Bets;
            $bet->user_id = $request->input('user_id');
            $bet->bets = json_encode($request->input('bets'));
            $bet->client = $request->input('client');
            $bet->bets_type = $request->input('bets_type');
            $bet->bets_amount = $request->input('bets_amount');
            $bet->save();
            return 'success';
        }catch (Exception $e){
            return 'failed';
        }
    }
}
