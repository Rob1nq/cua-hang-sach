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

class BanHangTimKiem extends Controller
{
    public function get_timkiemsach(Request $request){

        
        $count=Cart::count();
        $sach=DB::table('sach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenDauSach','like','%'.$request->input('search').'%')
        ->orwhere('DonGia','=',$request->input('search'))
        ->get();
        $tukhoa=$request->input('search');
       
        return view('banhang.search',compact('sach','count','tukhoa'));

    }
    public function thieunhi(){

        $count=Cart::count();

        $thieunhi=DB::table('theloai')
        ->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenTheLoai','=','Thiếu nhi')
        ->get();
        return view('banhang.thieunhi',compact('thieunhi','count'));

    }
    public function giaotrinh(){

        $count=Cart::count();

        $giaotrinh=DB::table('theloai')
        ->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenTheLoai','=','Giáo trình')
        ->get();
        return view('banhang.giaotrinh',compact('giaotrinh','count'));
    }
    public function tieuthuyet(){

        $count=Cart::count();

        $tieuthuyet=DB::table('theloai')
        ->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenTheLoai','=','Tiểu thuyết')
        ->get();
        return view('banhang.tieuthuyet',compact('tieuthuyet','count'));

    }
    public function vanhoc(){

        $count=Cart::count();

        $vanhoc=DB::table('theloai')
        ->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenTheLoai','=','Văn học')
        ->get();
        return view('banhang.vanhoc',compact('vanhoc','count'));

    }
    public function truyenngan(){

        $count=Cart::count();

        $truyenngan=DB::table('theloai')->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')->join('sach','sach.MaDauSach','=','dausach.MaDauSach')->where('TenTheLoai','=','Truyện ngắn')->get();
        return view('banhang.truyenngan',compact('truyenngan','count'));

    }
    public function sachtuluc(){

        $count=Cart::count();
        $sachtuluc=DB::table('theloai')
        ->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenTheLoai','=','Self-help')
        ->get();
        return view('banhang.sachtuluc',compact('sachtuluc','count'));

    }
    public function khoahoc(){

        $count=Cart::count();

        $khoahoc=DB::table('theloai')
        ->join('dausach','dausach.MaTheLoai','=','theloai.MaTheLoai')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('TenTheLoai','=','Khoa học')
        ->get();
        return view('banhang.khoahoc',compact('khoahoc','count'));

    }
    public function get_timkiemgia(Request $request){
        $count=Cart::count();
        $sach=DB::table('sach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('DonGia','<',$request->input('gia'))
        ->get();
        $gia=$request->input('gia');
        return view('banhang.gia',compact('sach','count','gia'));

    }
    public function postCannhatKH(Request $request){
         if($request->ajax()) {

            $id=$request->input('id');
            $DiaChi=$request->input('DiaChi');
            $HoTenKH=$request->input('HoTenKH');
            $email=$request->input('email');
            $DienThoai=$request->input('DienThoai');
            $password=$request->input('password');
            $MaKH=$request->input('MaKH');
            if ($password==null) DB::update('update member set email=? where id=?',[$email,$id]);
            if ($password!=null) DB::update('update member set password=?,email=? where id=?',[$password,$email,$id]);
            $kh=DB::update('update khachhang set HoTenKH=?, DiaChi=?, DienThoai=? where MaKH=?',[$HoTenKH,$DiaChi,$DienThoai,$MaKH]);
            echo "oke";
         }

    }
}
