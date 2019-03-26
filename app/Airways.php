<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airways extends Model
{
   protected $fillable = [
        'name',
        'hours_from',
        'hours_to',
        'id_city_from',
        'id_city_to',
        'Duration',
        'Transit',
        'price',
        'id_total_class',
        'Date_Of_Flight',
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
}
