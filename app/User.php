<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'gender','active','attempt','last_access',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function where_user($email){
        $user_attempt = User::where('email',$email)->first();
        return $user_attempt;
    }
    public function update_user($email){
        User::where('email',$email)
        ->update([
            'attempt'=>0,
            'active'=>1,
        ]);
    }
    public function update_attempt($email,$user_attempt){
        User::where('email',$email)
        ->update([
            'attempt'=>$user_attempt,
        ]);
    }
    public function update_active($email,$user_active){
        User::where('email',$email)
        ->update([
            'active'=>$user_active,
        ]);
    }
    public function update_last_access($email,$user_attempt){
        User::where('email',$email)
        ->update([
            'last_access'=>date('Y-m-d H:i:s'),
            'attempt' => $user_attempt,
        ]);
    }
    public function update_password_null($id,$name,$Phone){
        User::where('id',$id)->update([
            'phone'=>$Phone,
            'name'=>$name,
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
    public function update_password($id,$name,$password,$Phone){
        User::where('id',$id)->update([
            'password'=>bcrypt($password),
            // 'email'=>$request->email,
            'phone'=>$Phone,
            'name'=>$name,
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
    }
    public function add($email,$name,$password,$Phone){
        User::insert([
            'email'=>$email,
            'password'=>bcrypt($password),
            'name'=>$name,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            'phone'=>$Phone,
            'gender'=> 1,
            'active' => 1,
            'attempt' => 0,
            'last_access'=>date('Y-m-d H:i:s'),
        ]);
    }
}
