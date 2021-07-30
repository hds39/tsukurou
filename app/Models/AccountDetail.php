<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountDetail extends Model
{
    protected $table = 'account_details';
    use HasFactory;

    public function datum()
    {
        return $this->belongsTo('App\Models\Datum');
    }
}
