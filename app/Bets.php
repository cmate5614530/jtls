<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bets extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'bets';
    protected $fillable = ['user_id','client','bets', 'bets_type','bets_amount','submitted_time','payout_amount','payout_time','payout_status','comment'];
    protected $hidden = ['remember_token'];
}
