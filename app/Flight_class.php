<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight_class extends Model
{
   protected $fillable = [
        'name',
        'discount',
    ];
    protected $table = 'flight_class';
    protected $primaryKey = 'id';
}
