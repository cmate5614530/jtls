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
class AdminController extends Controller
{
    public function index(){
        return view('admin.index_admin');
    }

    public function users(){
        return view('admin.users_admin');
    }
}
