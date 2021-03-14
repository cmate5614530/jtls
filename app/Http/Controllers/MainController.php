<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;
use App\Sport;
use App\Odds;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    //
    public function index(){
        if(Auth::user()){
            if(Auth::user()->role == 'user'){
                return Redirect::to('/user-home');
            }elseif (Auth::user()->role == 'admin'){
                return Redirect::to('/admin-dashboard');
            }else{
                return Redirect::to('/404-page');
            }
        }else{
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

    }

    public function nopage(){
        return view('404-page');
    }

    public function login(){
        return view('login');
    }

}
