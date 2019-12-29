<?php

namespace App\Http\Controllers;

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

class AdminPhieuNhap extends Controller
{
    
    public function get_ctpn($id){
        if(Auth::guard('member')->check()==true) {
            return redirect()->route('AdminLogin');
            
        	}
        else {
            
            $ct_pn=DB::table('ct_phieunhap')
            ->join('sach','sach.MaSach','=','ct_phieunhap.MaSach')
            ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
            ->where('MaPhieuNhap','=',$id)
            ->get();
        	return view('page.ct_phieunhap',compact('ct_pn'));
    	}
    }
    public function get_phieunhap(){
        if(Auth::guard('member')->check()==true) {
            return redirect()->route('AdminLogin');
            
        	}
        else {

	        $phieunhap=DB::select('select * from bangnhap');
	        $tongtien=0;
	        foreach($phieunhap as $pn)
	        {
	            $tongtien=$tongtien+$pn->ThanhTien;
	        }
	        
	        $dausach=DB::select('select * from sach,dausach where sach.MaDauSach=dausach.MaDauSach');
             $bangnhap=DB::table('bangnhap')->get(); 
        	return view('page.phieunhap',compact('tongtien','dausach', 'bangnhap'));
    	}
    }

    public function get_danhsachphieunhap() {

        if(Auth::guard('member')->check()==true) {
            return redirect()->route('AdminLogin');
            
        	}
        else {
        	   
            $sach=DB::table('sach')
            ->join('nhaxuatban','nhaxuatban.MaNXB','=','sach.MaNXB')
            ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
            ->orderby('MaSach')
            ->get(); 
           
        	return view('page.danhsachsach',compact('sach'));
    	}
    }

    public function post_phieunhap(Request $request){
        if(Auth::guard('member')->check()==true) {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'soluongnhap'=>'required',
                'dongianhap'=>'required'
            ],
            [
                'soluongnhap.required'=>'Vui lòng nhập số lượng',
                'dongianhap.required'=>'Vui lòng nhập đơn giá'
            ]
            );

	        $SoLuongNhap=$request->input('soluongnhap');
	        $MaSach=$request->input('masach');
	        $DonGiaNhap=$request->input('dongianhap');
	        $ThanhTien=$request->input('thanhtien');
	        DB::insert('insert into bangnhap (MaSach,SoLuongNhap,DonGiaNhap,ThanhTien) values (?, ?, ?, ?)',[$MaSach,$SoLuongNhap,$DonGiaNhap,$ThanhTien]);        
        
            return redirect()->route('phieunhap'); 
        }
        
    }

    public function post_ctpn(Request $request){
        if(Auth::guard('member')->check()==true) {
            return redirect()->route('AdminLogin');
            
        }
        else {


	        $NgayNhap=$request->input('ngaynhap');
	        $Tongtien=$request->input('tongtien');
	        DB::insert('insert into phieunhap (NgayNhap,Tongtien) values (?, ?)',[$NgayNhap,$Tongtien]);
	        $maphieunhap=DB::select('select MaPhieuNhap from phieunhap');
	        $tmp=[];
	        foreach($maphieunhap as $value)
	         {
	            array_push($tmp, $value->MaPhieuNhap);

	         }
	         $MaPhieuNhap=array_pop($tmp);
	         //dd($MaPhieuNhap);
	        $ct_pn=DB::select('select * from bangnhap');
	        foreach($ct_pn as $ct)
	        {
	            $MaSach=$ct->MaSach;
	            $SoLuongNhap=$ct->SoLuongNhap;
	            $DonGiaNhap=$ct->DonGiaNhap;
	            $ThanhTien=$ct->ThanhTien;
	            $a=DB::insert('insert into ct_phieunhap (MaPhieuNhap,MaSach,SoLuongNhap,DonGiaNhap,ThanhTien) values (? , ?, ?, ?, ?)',[$MaPhieuNhap,$MaSach,$SoLuongNhap,$DonGiaNhap,$ThanhTien]);
                $soluongton=DB::select('select SoLuongTon from sach where MaSach=?',[$MaSach]);
                foreach ($soluongton as $value) {
                    $sl=$value->SoLuongTon;
                }
                $SL=(int)$sl+$SoLuongNhap;
                DB::update('update sach set SoLuongTon=? where MaSach=?',[$SL,$MaSach]); 

	        }  
	        DB::delete('delete from bangnhap');
	     
	        return redirect()->route('phieunhap')->with('success','Thêm thành công');
        }

    }
    public function danhsachpn(){
        $phieunhap=DB::table('phieunhap')->get();
        return view('page.danhsachpn',compact('phieunhap'));
    }
    public function xoactpn($id)
    {
        DB::delete('delete from bangnhap where MaSach=?',[$id]);
        return redirect()->route('phieunhap');
    }

}
