<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semillas extends Model
{
    use HasFactory;

    public function user(){ 
        return $this->belongsTo('App/Models/User');
    }
    public function cultivos(){ 
        return $this->hasMany('App/Models/cultivos');
    }
}
