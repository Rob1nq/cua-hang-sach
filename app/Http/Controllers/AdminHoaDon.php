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

class AdminHoaDon extends Controller
{
    public function get_hoadon(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else {


            $hoadon=DB::table('hoadon')->get();

    	   return view('page.hoadon',compact('hoadon'));
    	}
    }
    public function get_cthd($id){
        if(Auth::guard('member')->check()==true) {
            return redirect()->route('AdminLogin');
            
        }
        else {
            $cthd=DB::table('cthd')
            ->join('sach','sach.MaSach','=','cthd.MaSach')
            ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
            ->where('SoHD','=',$id)
            ->get();         
    		return view('page.CTHD',compact('cthd'));
    	}
    }
}
