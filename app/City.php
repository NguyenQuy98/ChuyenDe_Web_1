<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   protected $fillable = [
        'name',
        'code',
    ];
    protected $table = 'citys';
    protected $primaryKey = 'id';
    public function where_city($id)
    {
        $city = City::where('id',$id)->get();
        return $city;
    }

    public function airports()
    {
        return $this->hasMany('App\Airport');
    }

    public function getCityHasAriport()
    {
        // return $this->select('citys.id')->Join('airport', 'citys.id', '=', 'airport.city_id')
        // ->groupBy('citys.id')
        // ->paginate(4);
        return $this->select('citys.id','citys.name as city_name','citys.code as city_code')
        ->Join('airport', 'citys.id', '=', 'airport.city_id')
        ->groupBy('citys.id')
        ->paginate(4);
    }
}
