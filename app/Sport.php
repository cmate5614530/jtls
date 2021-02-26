<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    //
    protected $primaryKey = 'id';
    protected $fillable = ['key_text','active','group_text','details','title','has_outsights','ts'];
    protected $hidden = ['remember_token'];
}
