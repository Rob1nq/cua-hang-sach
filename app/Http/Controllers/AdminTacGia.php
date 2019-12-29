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

class AdminTacGia extends Controller
{
    public function get_tacgia(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        $tacgia=DB::select('select * from tacgia');


        return view('page.tacgia',compact('tacgia'));
    }
    }
    public function post_tacgia(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'tentacgia' => 'required'
            ],
            [
                'tentacgia.required'=>'Vui lòng nhập tên nhà xuất bản',
            ]);
            $TenTacGia=$request->input('tentacgia');
            DB::insert('insert into tacgia (TenTacGia) values(?)',[$TenTacGia]);
            return redirect()->route('tacgia')->with('success','Thêm thành công!');
        }

    }
    public function get_xoatacgia($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        DB::delete('delete from tacgia where MaTacGia=?',[$id]);
        return redirect()->route('tacgia');
    }

    }
    public function post_capnhattacgia(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'tentacgia' => 'required'
            ],
            [
                'tentacgia.required'=>'Vui lòng nhập tên nhà xuất bản',
            ]);
            $TenTacGia=$request->input('tentacgia');
            $MaTacGia=$request->input('matacgia');
            $TenTacGia=$request->input('tentacgia');
            DB::update('update tacgia set TenTacGia=? where MaTacGia=?',[$TenTacGia,$MaTacGia]);

            return redirect()->route('tacgia')->with('success','Cập nhật thành công');
        }
    }
    public function get_capnhattacgia($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        $tacgia=DB::select('select * from tacgia where MaTacGia=?',[$id]);
        return view('page.Capnhattacgia',compact('tacgia'));
    }
    }
}
