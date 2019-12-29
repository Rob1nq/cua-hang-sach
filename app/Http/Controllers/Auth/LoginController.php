<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'Admin/Login';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function getLogin(){
        return view('login.login');

    }
    public function postLogin(Request $request){
        Auth::guard('member')->logout();
              
        $username=$request->input('UserName');
        $password=$request->input('PassWord'); 
        if(Auth::attempt(['name' => $username, 'password' =>$password,'level'=>1]))
            {
                //dd(Auth::check());
                return redirect()->route('trangchu');
            }
            else
            {
                return redirect()->route('AdminLogin')->with('error','Tài khoản hoặc mật khẩu chưa chính xác');;
            }

         

    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('AdminLogin');
    }
    public function postAdminLoginShop(Request $request){
        $this->validate($request,
            [
                'UserName'=>'required',
                'PassWord'=>'required'
            ],
            [
                'PassWord.required'=>'Vui lòng nhập password',
                'UserName.required'=>'Vui lòng nhập username'

            ]);
        $username=$request->input('UserName');
        $password=$request->input('PassWord'); 
        if((Auth::guard('member')->attempt(['name' => $username, 'password' =>$password ])==true) ||(Auth::attempt(['name' => $username, 'password' =>$password,'level'=>1])==true))
            {
                
                return redirect()->route('homepage');
            }
            else
            {
                
                return redirect()->route('homepage');
            } 
    }
    public function LogoutShop(){
        if (Auth::guard('member')->check())
        Auth::guard('member')->logout();
        if (Auth::check()) 
            Auth::logout();
        return redirect()->route('homepage');
    }
}
