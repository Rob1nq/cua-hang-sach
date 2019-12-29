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

class AdminDauSach extends Controller
{
    public function post_dausach(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $this->validate($request,
            [
                'tendausach'=>'required',
                'dsmatacgia'=>'required'

            ],
            [
                'tendausach.required'=>'Vui lòng nhập tên đầu sách',
                'dsmatacgia.required'=>'Vui lòng chọn tác giả' 
            ]);
            $MaTheLoai=$request->input('matheloai');
            $TenDauSach=$request->input('tendausach');
            $MaTacGia=$request->input('dsmatacgia');
            $TenTacGia=$request->input('danhsachtacgia');
            $a=explode(' ',$MaTacGia);
            $array=array_unique($a);
            $array_new=array_values($array);
            DB::insert('insert into dausach (TenDauSach,MaTheLoai) values(?,?)',[$TenDauSach,$MaTheLoai]);
            $madausach=DB::select('select MaDauSach from dausach');
            sort($madausach);
            $tmp=[];
            foreach($madausach as $value)
             {
                array_push($tmp, $value->MaDauSach);

             }
             $MaDauSach=array_pop($tmp);

            foreach($array_new as $index=>$value)
            {
                $Matacgia=(int)$value;
                DB::insert('insert into ct_tacgia (MaDauSach,MaTacGia) values(?,?)',[$MaDauSach,$Matacgia]);
            }
                return redirect()->route('dausach')->with('success','Thêm thành công');
        }

    }

    public function post_capnhatdausach(Request $request){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        $MaTheLoai=$request->input('matheloai');
        $TenDauSach=$request->input('tendausach');
        $MaTacGia=$request->input('dsmatacgia');
        $TenTacGia=$request->input('danhsachtacgia');
        $MaDauSach=$request->input('MaDauSach');
        $a=explode(' ', $MaTacGia);
        $array=array_unique($a);
        $array_new=array_values($array);
            DB::update('update dausach set TenDauSach=?,MaTheLoai=?  where MaDauSach=?',[$TenDauSach,$MaTheLoai,$MaDauSach]);


        foreach($array_new as $index=>$value)
        {
            $Matacgia=(int)$value;
        }
        return redirect()->route('dausach');
    }
    }

    public function get_dausach(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $theloai=DB::select('select * from theloai');
            $tacgia=DB::select('select * from tacgia');
            $madausach=DB::select('select MaDauSach from dausach');
            
            $dausach=DB::table('dausach')
            ->join('theloai','dausach.MaTheLoai','=','theloai.MaTheLoai')
            ->join('ct_tacgia','ct_tacgia.MaDauSach','=','dausach.MaDauSach')
            ->join('tacgia','tacgia.MaTacGia','ct_tacgia.MaTacGia')
            ->orderby('dausach.MaDauSach')
            ->get();     

            return view('page.dausach',compact('theloai','tacgia','dausach'));
        }
    }

    
    public function get_capnhatdausach($id){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {
        $theloai=DB::select('select * from theloai');

        $tacgia=DB::select('select * from tacgia');        
        $dausach=DB::select('select * from dausach where MaDauSach=?',[$id]);
        foreach ($dausach as $ds){
            $MaTheLoai=$ds->MaTheLoai;
        }
        $selected=DB::select('select * from theloai where MaTheLoai=?',[$MaTheLoai]);

        $DsMaTacGia=DB::select('select ct_tacgia.MaTacGia from ct_tacgia,dausach where ct_tacgia.MaDauSach=dausach.MaDauSach and dausach.MaDauSach=?',[$id]);

        $tmp=[];
        foreach ($DsMaTacGia as $value) {
        array_push($tmp, $value->MaTacGia);
            
        }
        $matacgia=implode(' ', $tmp);

        $DsTenTacGia=DB::select('select tacgia.TenTacGia from ct_tacgia,dausach,tacgia where ct_tacgia.MaDauSach=dausach.MaDauSach and ct_tacgia.MaTacGia=tacgia.MaTacGia and dausach.MaDauSach=?',[$id]);
        $tmp=[];
        foreach ($DsTenTacGia as $value) {
        array_push($tmp, $value->TenTacGia);
            
        }
        $tentacgia=implode(';', $tmp);
        //dd($tentacgia);
        return view('page.capnhatdausach',compact('theloai','tacgia','dausach','matacgia','selected','tentacgia','id'));
        }
    }
    public function xoadausach($id){
        $count=DB::table('dausach')->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
                                    ->where('sach.MaDauSach','=',$id)->get()->count();
        if($count==0) {
            DB::delete('delete from dausach where MaDauSach=?',[$id]);
            return redirect()->route('dausach')->with('success','Xóa thành công');

        }
        else
            return redirect()->route('dausach')->with('danger','Lỗi !');

    }
    

}
