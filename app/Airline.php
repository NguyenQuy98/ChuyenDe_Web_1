<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
   protected $fillable = [
        'name',
        'code',
        'nation_id',
        'total',
    ];
    protected $table = 'airlines';
    protected $primaryKey = 'id';


    public function nations()
    {
        return $this->belongsTo('App\Nation');
    }
    public function getAllNation()
    {
        return Nation::all();

    }

    public function airways()
    {
        return $this->hasMany('App\Airways');
    }


}
