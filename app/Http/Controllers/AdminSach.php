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

class AdminSach extends Controller
{
    public function get_qlsach(){

        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {

            $nhaxuatban=DB::select('select * from nhaxuatban');
            $dausach=DB::select('select * from dausach');     

    	    return view('page.qlsach',compact('nhaxuatban','dausach'));
        }
    }
      public function post_qlsach(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {


            $MaNXB=$request->input('manhaxuaban');
            $MaDauSach=$request->input('madausach');
            $NamXB=$request->input('namxb');
            $SoLuongTon=$request->input('soluongton');
            $DonGia=$request->input('dongia');
            $MoTa=$request->input('mota');
            $HinhAnh=$request->input('anh');  
            $DonGiaSale=$request->input('dongiakhuyenmai');
            $NgayRaMat=$request->input('ngayramat');
            DB::insert('insert into sach (MaDauSach,MaNXB,NamXB,NgayRaMat,SoLuongTon,DonGia,MoTa,HinhAnh,DonGiaSale) values(?,?,?,?,?,?,?,?,?)',[$MaDauSach,$MaNXB,$NamXB,$NgayRaMat,$SoLuongTon,$DonGia,$MoTa,$HinhAnh,$DonGiaSale]);    

            return redirect()->route('qlsach'); 
        }
      
    }

     public function post_capnhatsach(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
       
         return redirect()->route('capnhatsach');
     }
    }
}
