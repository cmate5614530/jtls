<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sport;
use App\Odds;
use App\Teams;
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
}
