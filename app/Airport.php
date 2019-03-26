<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    //
    protected $table = 'airport';
    public function cities()
    {
        return $this->belongsTo('App\City');

    }
    public function getAllCity()
    {
        return City::all();

    }

}
