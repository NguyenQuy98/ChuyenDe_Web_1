<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   protected $fillable = [
        'name',
        'code',
    ];
    protected $table = 'city';
    protected $primaryKey = 'id';
}
