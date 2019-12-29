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

class AdminTheLoai extends Controller
{
	public function get_theloai(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $theloai=DB::select('select * from theloai');
            return view('page.theloai',compact('theloai'));
        }
    }
    public function post_theloai(Request $request){ 
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'tentheloai'=>'required|unique:theloai,TenTheLoai   '
            ],
            [
                'tentheloai.required'=>"Vui lòng nhập thể loại!",
                'tentheloai.unique'=>"Tên đã tồn tại"  
            ]
            );

            $TenTheLoai=$request->input('tentheloai');
            DB::insert('insert into theloai (TenTheLoai) values (?)',[$TenTheLoai])->with('success','Thêm thành công!');
            return redirect()->route('theloai');
        }

    }
    public function get_xoatheloai($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $theloai=DB::table('theloai')->join('dausach','theloai.MaTheLoai','=','dausach.MaTheLoai')->where('theloai.MaTheLoai','=',$id)->get()->count();
            if ($theloai==0) {

                DB::delete('delete  from theloai where MaTheLoai=?',[$id]);
                return redirect()->route('theloai')->with('success','Xóa thành công !');
            }
            else return redirect()->route('theloai')->with('danger','Lỗi');


        }
    }
    public function get_capnhattheloai($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $theloai=DB::select('select * from theloai where MaTheLoai=?',[$id]);
            return view('page.capnhattheloai',compact('theloai'));
        }
    }
    public function post_capnhattheloai(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'tentheloai'=>'required|unique:theloai,TenTheLoai'
            ],
            [
                'tentheloai.required'=>"Vui lòng nhập thể loại!",
                'tentheloai.unique'=>"Tên đã tồn tại"  
            ]
            );
            $MaTheLoai=$request->input('matheloai');
            $TenTheLoai=$request->input('tentheloai');
            DB::update('update theloai set TenTheLoai=? where MaTheLoai=?',[$TenTheLoai,$MaTheLoai]);
            return redirect()->route('theloai')->with('success','Cập nhật thành công');
        }

    }
}
