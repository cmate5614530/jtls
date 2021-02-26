<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'teams';
    protected $fillable = ['team_name','ts'];
    protected $hidden = ['remember_token'];
}
