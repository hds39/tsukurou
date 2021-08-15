<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDetail extends Model
{
    use HasFactory;

    protected $table = 'data_details';
    //リレーション
    public function datum()
    {
        return $this->belongsTo('App\Models\Datum');
    }
}
