<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datum extends Model
{
    use HasFactory;
    //リレーション
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function dataDetails()
    {
        return $this->hasMany('App\Models\DataDetail');
    }

    public function accountDetails()
    {
        return $this->hasMany('App\Models\AccountDetail');
    }
}
