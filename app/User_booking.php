<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_booking extends Model
{
   protected $fillable = [
        'name',
        'id_airways',
        'phone',
        'email',
        'price',
        'id_Payment_Method',
        'Card_Number',
        'Name_On_Card',
        'CCV_Code',
        'created_at',
        'updated_at',
    ];
    protected $table = 'user_bookings';
    protected $primaryKey = 'id';

    public function add($email,$name,$phone,$payment_method,$number,$name_Card,$CCV_Code){
        User_booking::insert([
            'email'=>$email,
            'name'=>$name,
            'id_airways'=>1,
            'phone'=>$phone,
            'price'=>"IDR24.796.650,00",
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'id_Payment_Method'=>$payment_method,
            'Card_Number'=>$number,
            'Name_On_Card'=>$name_Card,
            'CCV_Code'=>$CCV_Code,
            ]);
    }
    public function updateUser($id,$email,$name,$phone,$price,$number,$name_Card,$CCV_Code){
        User_booking::where('id',$id)->update([
            'email'=>$email,
            'name'=>$name,
            'id_airways'=>1,
            'phone'=>$phone,
            'price'=>$price,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'id_Payment_Method'=>1,
            'Card_Number'=>$number,
            'Name_On_Card'=>$name_Card,
            'CCV_Code'=>$CCV_Code,
            ]);
    }
}
