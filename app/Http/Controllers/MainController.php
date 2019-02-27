<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\City;
use App\User;
use Validator;

class MainController extends Controller
{
    public function main()
    {
        $cities = City::all();
        return view('home',[
            'cities' => $cities,
        ]);
    }
    public function list()
    {
        return view('flight-list');
    }
    public function book()
    {
        return view('flight-book');
    }
    public function detail()
    {
        return view('flight-detail');
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
            User::insert([
                'email'=>$request->email,

                'password'=>bcrypt($request->password),
                'name'=>$request->name,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'phone'=>$request->Phone,
                'gender'=> 1,
            ]);
        return redirect()->route('register')->with('success','Đăng ký thành công');

    }
    public function postLogin(Request $request){
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
        $user_attempt = DB::table('users')->where('email',$request->email)->first();
        if($user_attempt){
            if($user_attempt->active == 0){
                $errors = new MessageBag(['errorlogin' => 'Tài khoản đã bị khóa, vui lòng thử lại sau']);
                return redirect()->back()->withInput()->withErrors($errors);
                // return redirect()->route('login-get')->withErrors(['locked_msg'=>'Tài khoản đã bị khóa, vui lòng thử lại sau']);
            }
        }
    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
            $email = $request->input('email');
            $password = $request->input('password');

            if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                $cities = City::all();
                return view('home',[
                    'cities' => $cities,
                ]);
            } else {
                if($user_attempt){
                    DB::table('users')
                    ->where('email',$request->email)
                    ->update([
                        'last_access'=>date('Y-m-d H:i:s'),
                        'attempt' => $user_attempt->attempt+1
                    ]);
                    if($user_attempt->attempt+1 >= 3){
                        DB::table('users')
                        ->where('email',$request->email)
                        ->update([
                            'active'=>0,
                        ]);
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

        if($request->password != null){
            DB::table('users')->update([
                'password'=>bcrypt($request->password),
                // 'email'=>$request->email,
                'phone'=>$request->tel,
                'name'=>$request->name,
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
        else{
            DB::table('users')->update([
                // 'email'=>$request->email,
                'phone'=>$request->tel,
                'name'=>$request->name,
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }

        return redirect()->route('edit')->with('success',' Cập nhật thành công');
    }
}
