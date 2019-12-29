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

class BanHangGioHang extends Controller
{
   public function get_giohang(){

        $content=Cart::content();
        $total=Cart::total(0,'.','');
        $count=Cart::count();
        $tax=Cart::tax(0,'.','');
        $subtotal=Cart::subtotal(0,'.','');

        return view('banhang.giohang',compact('content','total','count','subtotal','tax'));
    }
    public function get_themgiohang($id){


       $sach= DB::table('sach')->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')->where('MaSach',$id)->first();
       if($sach->DonGiaSale!=0) $sach->DonGia=$sach->DonGiaSale;

       Cart::add(array('id'=>$id,'name'=>$sach->TenDauSach,'qty'=>1,'price'=>$sach->DonGia,'options'=>array('imgs'=>$sach->HinhAnh)));
       $content=Cart::content();
        return redirect()->route('shop');
    }
    public function xoa_giohang($id){
        Cart::remove($id);
        return redirect()->route('giohang');
    }

    public function capnhat_giohang(Request $request){
            
        if($request->ajax())          
        {

            //dd($request->get('rowId'));
            $id=$request->input('id');
            $qty=$request->input('qty');
            echo "oke";
            Cart::update($id, ['qty' =>$qty]);

        }  

    
    }
    public function postAddCart(Request $request){
        if($request->ajax())          
        {

            $id=$request->input('id');
            $qty=$request->input('qty');
            $sach= DB::table('sach')
            ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
            ->where('MaSach',$id)->first();
            if($sach->DonGiaSale!=0) $sach->DonGia=$sach->DonGiaSale;

            Cart::add(array('id'=>$id,'name'=>$sach->TenDauSach,'qty'=>$qty,'price'=>$sach->DonGia,'options'=>array('imgs'=>$sach->HinhAnh)));
            $content=Cart::content();

            echo "oke";

        }  


    }
}
