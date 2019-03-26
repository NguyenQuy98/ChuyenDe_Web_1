<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\City;
use App\User;
use App\Flight_class;
use App\Airways;
use App\User_booking;
use App\Transit;
use Carbon\Carbon;
use Validator;

class MainController extends Controller
{
    public function main()
    {
        $cities = City::all();
        $Flight_class = Flight_class::all();
        return view('home',[
            'cities' => $cities,
            'Flight_class'=> $Flight_class,
        ]);
    }
    public function list(Request $request)
    {
        $airway = new Airways;
        $city_from =new City;
        $city_to = new City;
        return view('flight-list',[
            'airway' => $airway->from_to($request->from,$request->to),
            'city_from'=>$city_from->where_city($request->from),
            'city_to'=>$city_to->where_city($request->to),
        ]);
    }
    public function book(Request $request)
    {
        return view('flight-book');
    }
    public function postbook(Request $request)
    {
        $name = $request->last_name . $request->first_name;
        $user_booking = new User_booking;
        $user_booking->add($request->email,$name,$request->phone,$request->payment_method,$request->number,$request->name_Card,$request->CCV_Code);

        return redirect()->route('flight-book')->with('success','Đăng ký thành công');
    }
    public function detail($id,Request $request)
    {

        $airway = new Airways;
        $city_from =new City;
        $city_to = new City;
        $transit = new Transit;
        $city_Transit_from = new City;
        $city_Transit_to = new City;
        return view('flight-detail',[
            'airway' => $airway->where_id($id),
            'city_from'=>$city_from->where_city(1),
            'city_to'=>$city_to->where_city(2),
            'transit'=>$transit->where_transit(0),
            'city_Transit_from'=>$city_Transit_from->where_city(3),
            'city_Transit_to'=>$city_Transit_to->where_city(4),
        ]);
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {

        return view('register');
    }
    public function register_EX(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'Phone' => 'required|min:11|numeric',
        ]);
        // if($validatedData->fails()){
        //     return redirect()->route('register')->withErrors($validatedData);
        // }
        // else{
            $user = new User;
            $user->add($request->email,$request->password,$request->name,$request->Phone);
        return redirect()->route('register')->with('success','Đăng ký thành công');

    }
    public function postLogin(Request $request){
        $user = new User;
        $rules = [
    		'email' =>'required|email',
    		'password' => 'required|min:5'
    	];
    	$messages = [
    		'email.required' => 'Email là trường bắt buộc',
    		'email.email' => 'Email không đúng định dạng',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
        $user_attempt = $user->where_user($request->email);
        if($user_attempt){
            if($user_attempt->active == 0){
                $minutes = round((time() - strtotime( $user_attempt->last_access))/60);
                if($minutes >= 30)
                {
                    $user->update_user($request->email);
                }
                $errors = new MessageBag(['errorlogin' => 'Tài khoản đã bị khóa, vui lòng thử lại sau']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            $email = $request->input('email');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                $cities = City::all();
                $user->update_attempt($request->email,0);
                $Flight_class = Flight_class::all();
                return view('home',[
                    'cities' => $cities,
                    'Flight_class'=> $Flight_class,
                ]);
            } else {
                if($user_attempt){
                    $user->update_last_access($request->email,$user_attempt->attempt+1);
                    if($user_attempt->attempt+1 >= 2){
                        $user->update_active($request->email,0);
                    }
                }
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }

    }
    public function edit_profile(){
        $user = Auth::user();
        return view('edit',compact('user'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function edit_profile_post(Request $request){

        $user = new User;
        if($request->password != null){
            $user->update_password($request->id,$request->name,$request->password,$request->tel);
        }
        else{
            $user->update_password_null($request->id,$request->name,$request->tel);
        }

        return redirect()->route('edit')->with('success',' Cập nhật thành công');
    }
}
