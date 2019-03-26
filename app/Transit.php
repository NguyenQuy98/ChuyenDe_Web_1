<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transit extends Model
{
   protected $fillable = [
        'name_transit',
        'id_airway',
        'time_from',
        'time_to',
        'id_city_from',
        'id_city_to',
        'Duration',
    ];
    protected $table = 'transits';
    protected $primaryKey = 'id';
    public function where_transit($id)
    {
        $transit = Transit::where('id_airway',$id)->get();
        return $transit;
    }
    public function Airways()
    {
        return $this->belongsTo('App\Airways','id_airway');
    }
}
