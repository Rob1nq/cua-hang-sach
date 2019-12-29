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

class AdminNXB extends Controller
{
    public function get_NXB(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        $nxb=DB::select('select * from nhaxuatban');
        return view('page.nxb',compact('nxb'));
    }

    }
    public function post_nxb(Request $request)
    {
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        $this->validate($request,
            [
                'tennhaxuatban' => 'required|unique:nhaxuatban,TenNXB'
            ],
            [
                'tennhaxuatban.required'=>'Vui lòng nhập tên nhà xuất bản',
                'tennhaxuatban.unique'=>'Tên đã tồn tại'
            ]);
        $TenNXB=$request->input('tennhaxuatban');
        DB::insert('insert into nhaxuatban (TenNXB) values (?)',[$TenNXB]);     
        return redirect()->route('NXB')->with('success','Thêm thành công');
    }

    }
    public function post_capnhatnxb(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'tennhaxuatban' => 'required|unique:nhaxuatban,TenNXB'
            ],
            [
                'tennhaxuatban.required'=>'Vui lòng nhập tên nhà xuất bản',
                'tennhaxuatban.unique'=>'Tên đã tồn tại'
            ]);
            $TenNXB=$request->input('tennhaxuatban');
            $MaNXB= $request->input('manxb');
            DB::update('update nhaxuatban set TenNXB=? where MaNXB=?',[$TenNXB,$MaNXB]);
            return redirect()->route('NXB')->with('success','Cập nhật thành công');
    }

    }
    public function get_xoanxb($id){

    	$count=DB::table('sach')->join('nhaxuatban','nhaxuatban.MaNXB','=','sach.MaNXB')
    					->where('nhaxuatban.MaNXB','=',$id)->get()->count();
    	if ($count == 0) {
    		 DB::delete('delete from nhaxuatban where MaNXB=?',[$id]); 
    		 return redirect()->route('NXB')->with('success','Xóa thành công!'); 
    		 } 
    	if ($count > 0) return redirect()->route('NXB')->with('danger','Lỗi! Không được xóa nhà xuất bản này'); 

	    
    }
    public function get_capnhatnxb($id){

        $nxb=DB::select('select * from nhaxuatban where MaNXB=?',[$id]);
        return view('page.Capnhatnxb',compact('nxb'));   
    }
}
