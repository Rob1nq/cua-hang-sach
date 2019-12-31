<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;
use App\ct_phieunhap;
use App\sach;
use App\baocao;
use App\cthd;
use App\hoadon;
use App\khachhang;
use App\phieunhap;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Auth;
use App\User;

class UserController extends Controller
{
    public function getAddUser(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
    	return view('page.AddUser');
    }

    }
    public function postAddUser(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {

            $this->validate($request,
            [
                'username'=>'required|unique:member,name',
                'password'=>'required',
                'email'=>'required|email',

            ],
            [
                'username.required'=>'Vui lòng nhập UserName',
                'username.unique'=>'Tên đã tồn tại',
                'password.required'=>'Vui lòng nhập password',
                'email.required'=>'Vui lòng nhập Email',
                'email.email'=>'Vui lòng nhập đúng định dạng'

            ]);


        	$user =new User();
        	$user->name= $request->input('username');
        	$user->password= bcrypt($request->input('password'));
        	$user->email= $request->input('email');
        	$user->level= $request->input('level');
        	$user->save();

        	return redirect()->route('getAddUser')->with('success', 'Thêm thành công');
        }

    }
    public function getUserDeleteUser(){

    }
    public function getList(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
    	$user=DB::table('member')->select('id','name','email','level')->get();
    	//dd($user);
    	return view('page.UserList',compact('user'));
    }
    }
    public function getUser(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
        return view('page.Useradmin');
    }

    }
    public function getDelete($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
        //DB::delete('delete from users where id=?',[$id]);
        $user_curr=Auth::user()->level==1;
        $user=User::find($id);
        if($user['level']==1){
            return redirect()->route('getList')->with('danger', 'Xóa thất bại, Không thể xóa Admin');
        }
        else {
         $user->delete($id);
        return redirect()->route('getList')->with('success', 'Đăng xóa thành công');

        }
    }

    }
    public function getUpdate($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
        $data=User::find($id);

        return view('page.UpdateUser',compact('data'));
    }
    }
    public function postUpdateUser(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('Admin Login');

        }
        else {


        $id=$request->input('id');
        $pass=$request->password;
        $password=bcrypt($pass);
        $email=$request->input('email');
        $level=$request->input('level');
        if ($pass==null) DB::update('update member set email=?,level=? where id=?',[$email,$level,$id]);
        //dd($id,$password,$email,$level);
        //$remember_token=$request->input('_token');
        else DB::update('update member set password=?,email=?,level=? where id=?',[$password,$email,$level,$id]);
        return redirect()->route('getList')->with('success','Cập nhật thành công');
    }

    }
    public function getSignup(){

        $count=Cart::count();
        return view('login.signup',compact('count'));
    }

    public function PostSignUp(Request $request){
        $this->validate($request,
            [
                'username'=>'required|unique:member,name',
                'password'=>'required',
                'hoten'=>'required',
                'diachi'=>'required',
                'tel'=>'required',
                'email'=>'required|email'
            ],
            [
                'username.required'=>'Vui lòng nhập tên đăng nhập',
                'username.unique'=>'Tên đăng nhập đã tồn tại',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'hoten.required'=>'Vui lòng nhập họ tên',
                'diachi.required'=>'Vui lòng nhập địa chỉ',
                'tel.required'=>'Vui lòng nhập số điện thoai',
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không chính xác'
            ]

        );

        $name=$request->username;
        $password=$request->password;
        $email=$request->email;
        $dienthoai=$request->tel;
        $HoTenKH=$request->hoten;
        $DiaChi=$request->diachi;

        DB::table('khachhang')->insert(['HoTenKH'=>$HoTenKH,'DiaChi'=>$DiaChi,'DienThoai'=>$dienthoai]);
        $kh=DB::table('khachhang')->select('MaKH')->get();
        $tmp=[];
        foreach($kh as $value) {
            array_push($tmp, $value->MaKH);
        }
        $MaKH=array_pop($tmp);


        $user=DB::table('member')->insert(['name'=>$name,'password'=>bcrypt($password),'email'=>$email,'level'=>0,'MaKH'=>$MaKH]);
        //DB::

        return redirect()->route('Signup')->with('success','Tạo tài khoản thành công');
    }

    function getTK($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
            $tk=DB::table('member')->where('id','=',$id)->first();

        return view('page.capnhattaikhoan',compact('tk'));
    }
    }
    function postTK(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {


        $id=$request->input('id');
        $pass=$request->password;
        $password=bcrypt($pass);
        $email=$request->input('email');
        if ($pass==null) DB::update('update member set email=? where id=?',[$email,$id]);

        else DB::update('update member set password=?,email=? where id=?',[$password,$email,$id]);
        return redirect()->route('getTK',[$id])->with('success','Cập nhật thành công');
        }
    }

    public function getThongBao(){
        $MaKH=DB::table('khachhang')->select('khachhang.MaKH')->join('member','member.MaKH','=','khachhang.MaKH')->where('khachhang.MaKH','=',Auth::guard('member')->user()->MaKH)->first();

        $thongbao=DB::table('thongbao')->where('MaKH','=',$MaKH->MaKH)->get();
        $count=Cart::count();
        return view('banhang.thongbao',compact('thongbao','count'));

    }
    public function getXoaThongbao($Ma){

        DB::delete('delete  from thongbao where id=?',[$Ma]);

        return redirect()->route('getThongBao');
    }
    public function AdminThongBao(){
        $thongbao=DB::table('admin')->get();
        return view('page.AdminThongBao',compact('thongbao'));
    }
    public function postContact(Request $request){

        $noidung=$request->input('noidung');
        $email=$request->input('email');
        $nguoigui=$request->input('hoten');
        DB::table('admin')->insert(['NguoiGui'=>$nguoigui,'Email'=>$email,'NoiDung'=>$noidung,'ThoiGian'=>Carbon::now()]);
        return redirect()->route('lienhe');
    }
    public function dangkithongtin(Request $request){
        $email=$request->input('email');
        $noidung="Đăng kí email nhận thông báo";
        DB::table('admin')->insert(['email'=>$email,'NoiDung'=>$noidung,'ThoiGian'=>Carbon::now()]);
        return redirect()->route('lienhe');
    }
    public function AdminXoaThongBao($id)
    {
        DB::delete('delete from admin where id=?',[$id]);
        return redirect()->route('AdminThongBao');
    }


}
