<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odds extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'odds';
    protected $fillable = ['sport_key','sport_nice','home_team','away_team','team1','team2','commence_time','site_key','site_nice','last_update','h2h', 'spreads', 'totals', 'ts'];
    protected $hidden = ['remember_token'];
}
