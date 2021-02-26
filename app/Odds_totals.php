<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odds_totals extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'Odds_totals';
    protected $fillable = ['sport_key','sport_nice','home_team','away_team','commence_time','site_key','site_nice','last_update','odds','ts'];
    protected $hidden = ['remember_token'];
}
