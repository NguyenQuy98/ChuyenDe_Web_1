<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    protected $fillable = [
        'name',
        'code',
    ];
    protected $table = 'nations';
    protected $primaryKey = 'id';


    public function airline_Nation()
    {
        return $this->hasMany('App\Airline');

    }

    public function getNationHasAriline()
    {
        return $this->select('nations.id','nations.name as nation_name','nations.code as nation_code')
        ->Join('airlines', 'nations.id', '=', 'airlines.nation_id')
        ->groupBy('nations.id')
        ->paginate(2);
        // return $this->leftJoin('airlines', 'nations.id', '=', 'airlines.nation_id')
        // ->select('nations.id','nations.name as nation_name','nations.code as nation_code','airlines.id','airlines.name as airline_name','airlines.code as airline_code')
        // ->where('airlines.id','<>',null)->get();
    }
}
