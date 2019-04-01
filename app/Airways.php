<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airways extends Model
{
   protected $fillable = [
        'id_ariline',
        'hours_from',
        'hours_to',
        'id_city_from',
        'id_city_to',
        'Duration',
        'Transit',
        'price',
        'total',
    ];
    protected $table = 'airways';
    protected $primaryKey = 'id';
    public function where_id($id){
        $airway = Airways::where('id',$id)->get();
        return $airway;
    }
    public function from_to($from, $to){
        $airway = Airways::where('id_city_from',$from)->orWhere('id_city_to',$to)->get();
        return $airway;
    }

    public function Transit()
    {
        return $this->hasMany('App\Transit','id_airway');
    }

    public function airlines()
    {
        return $this->belongsTo('App\Airline');
    }

    public static function insertFL($data){
        Airways::insert([

            'id_ariline'=>$data['air'],
            'hours_from'=>$data['hours_from'],
            'hours_to'=>$data['hours_to'],
            'id_city_from'=>$data['from'],
            'id_city_to'=>$data['to'],
            'Duration'=>$data['departure'],
            'Transit'=>0,
            'price'=>$data['Price'],
            'total'=>$data['total_person'],
        ]);
    }

    public static function kiem_tra_bay_noi_dia($city1, $city2){
        $city1 = City::find($city1);
        $city2 = City::find($city2);

        if ($city1->city_nation_id == $city2->city_nation_id){
            return true;
        }
        return false;
    }
    public static function kiem_tra_hang_bay_noi_dia($city1, $city2, $airline_id){
        $city1 = City::find($city1);
        $city2 = City::find($city2);

        $nation_airline_id = Airline::find($airline_id)->airline_nation_id;

        if ($city1->city_nation_id == $city2->city_nation_id && $city1->city_nation_id == $nation_airline_id){
            return true;
        }
        return false;
    }

    public static function kiem_tra_bay_xuyen_quoc_gia($city1, $city2){
        $city1 = City::find($city1);
        $city2 = City::find($city2);

        $nation1 = $city1->city_nation_id;
        $nation2 = $city2->city_nation_id;

        $country = Nation::find($nation1)->country_id;

        $country_arr = explode(',', $country);

        if (in_array($nation2, $country_arr)){
            return true;
        }
        return false;
    }
}
