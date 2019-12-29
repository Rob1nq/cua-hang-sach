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

class AdminKhachHang extends Controller
{
    public function get_khachhang(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $khachhang=DB::table('khachhang')->join('member','member.MaKH','=','khachhang.MaKH')->get();

    		return view('page.khachhang',compact('khachhang'));
    	}
    }
    public function get_ctkh($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
          
            $thongtin=DB::table('member')->where('id','=',$id)->first();
            
            return view('page.chitietKH',compact('thongtin'));
        }

    }

    public function get_taikhoankh(){

        $taikhoan=DB::table('member')->join('khachhang','khachhang.MaKH','=','member.MaKH')->where('name','=',Auth::guard('member')->user()->name)->first();
        // dd($taikhoan);
        $count=Cart::count();
        return view('banhang.taikhoan',compact('taikhoan','count'));
    }
    public function get_lienhe(){
        $count=Cart::count();
        return view('banhang.lienhe',compact('count'));
    }
    public function postCannhatKH(Request $request){

            $HoTenKH=$request->input('HoTenKH');
            $id=$request->input('id');
            $DiaChi=$request->input('DiaChi');
            $DienThoai=$request->input('DienThoai');
            $email=$request->input('email');
            $pass=$request->input('password');            
            $MaKH=$request->input('MaKH');
            DB::update('update khachhang set HoTenKH=?,DiaChi=?,DienThoai=? where MaKH=?',[$HoTenKH,$DiaChi,$DienThoai,$MaKH]);
            $password=bcrypt($pass);

            if ($pass!="") 
                {
                    DB::update('update member set password=?,email=? where id=?',[$password,$email,$id]);
                    $noidung="Thay đổi email,password thành công ";

                    DB::table('thongbao')
                    ->insert(['Thoigian'=>Carbon::now(),'NoiDung'=>$noidung,'MaKH'=>$MaKH]);
                }
            if ($pass=="") 
                {
                    DB::update('update member set email=? where id=?',[$email,$id]); 
                    $noidung="Thay đổi email thành công ";
                    DB::table('thongbao')
                    ->insert(['Thoigian'=>Carbon::now(),'NoiDung'=>$noidung,'MaKH'=>$MaKH]);
                }    
            //if ($pass=="")   
            echo "oke";


        // }
    }
}
