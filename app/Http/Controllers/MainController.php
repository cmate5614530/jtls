<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;
use App\Sport;
use App\Odds_h2h;
use App\Odds_spreads;
use App\Odds_totals;
use App\Odds;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index(){
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

        return view('main')->with('data',$data);
    }

    public function login(){
        return view('login');
    }

    public function ddd(){
        $data['sports'] = Sport::where('active',1)->get();
        //Football: NFL
        $data['NFL_h2h'] = Odds_h2h::where('sport_nice','NFL')
            ->where('commence_time','>',time())->get();
        $data['NFL_spreads'] = Odds_spreads::where('sport_nice','NFL')
            ->where('commence_time','>',time())->get();
        $data['NFL_totals'] = Odds_totals::where('sport_nice','NFL')
            ->where('commence_time','>',time())->get();
        //Ice Hockey: NHL
        $data['NHL_h2h'] = Odds_h2h::where('sport_nice','NHL')
            ->where('commence_time','>',time())->get();
        $data['NHL_spreads'] = Odds_spreads::where('sport_nice','NHL')
            ->where('commence_time','>',time())->get();
        $data['NHL_totals'] = Odds_totals::where('sport_nice','NHL')
            ->where('commence_time','>',time())->get();
        //Soccer:
        $data['soccer_h2h'] = Odds_h2h::where('sport_key','like','soccer%')
            ->where('commence_time','>',time())->get();
        $data['soccer_spreads'] = Odds_spreads::where('sport_key','like','soccer%')
            ->where('commence_time','>',time())->get();
        $data['soccer_totals'] = Odds_totals::where('sport_key','soccer%')
            ->where('commence_time','>',time())->get();
//
//        $data['NFL_h2h'] = Odds_h2h::where('sport_nice','NFL')
//            ->where('commence_time','>',time());
//
//        $data['NFL_h2h'] = Odds_h2h::where('sport_nice','NFL')
//            ->where('commence_time','>',time());
//
//        $data['NFL_h2h'] = Odds_h2h::where('sport_nice','NFL')
//            ->where('commence_time','>',time());
        $data['odds_h2h'] = Odds_h2h::where('commence_time','>',time())->get();
        return view('main')->with('data', $data);
    }
}
