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


class BanHangDatHang extends Controller
{
    public function get_dathang(){


            $name=Auth::guard('member')->user()->name;
            $thongtin=DB::table('khachhang')->join('member','khachhang.MaKH','=','member.MaKH')
            ->where('name','=',$name)->first();

            $MaKH=$thongtin->MaKH;
            $date=Carbon::now()->toDateString();
            $Tongtien=Cart::total(0,'.','');
            DB::table('hoadon')
            ->insert(['MaKH'=>$MaKH,'NgayLap'=>$date,'Tongtien'=>$Tongtien]);
            $hoadon=DB::table('hoadon')
            ->select('SoHD')
            ->get();
            $tmp=[];
            foreach($hoadon as $value)
            {
                array_push($tmp,$value->SoHD);
            }
            sort($tmp);
            $SoHD=array_pop($tmp);
            $content=Cart::content();
            foreach($content as $value)
            {
                DB::table('cthd')
                ->insert(['SoHD'=>$SoHD,'MaSach'=>$value->id,'SoLuongBan'=>$value->qty,'DonGiaBan'=>$value->price,'ThanhTien'=>$value->price*$value->qty]);

            }
            //cap nhat so luong ton
            $soluongton=DB::table('sach')
                    ->select('MaSach','SoLuongTon','NgayRaMat','TenDauSach')
                    ->join('dausach','dausach.MaDauSach','sach.MaDauSach')
                    ->get();

            foreach ($soluongton as $slt) {
                $sl=0;
                foreach ($content as $value) {
                            $kt=false;

                            if($value->id==$slt->MaSach)
                            {
                                $kt=true;
                                $sl=$value->qty;
                                 break;
                            }
                            else
                                {
                                    $kt=false;
                                    $sl=0;
                                }
                }
                            if($kt)
                                {
                                    $tong=$slt->SoLuongTon-$sl;
                                    DB::update('update sach set SoLuongTon=? where MaSach=?',[$tong,$slt->MaSach]);

                                }
                                else {
                                    $tong=$slt->SoLuongTon-$sl;

                            }




            }

            $kh=DB::table('khachhang')
            ->select('HoTenKH')
            ->join('member','member.MaKH','=','khachhang.MaKH')
            ->where('khachhang.MaKH','=',$MaKH)
            ->first();

            $tenKH=$kh->HoTenKH;
            foreach ($soluongton as $slt) {

                foreach ($content as $value) {
                            $kt=false;

                    if($value->id==$slt->MaSach)
                    {
                        $kt=true;
                        $NgayRaMat=$slt->NgayRaMat;
                        break;
                    }
                    else
                    {
                        $kt=false;
                    }
                }
                if($kt)
                {
                    if($NgayRaMat > Carbon::now()->toDateString())
                    {
                        $nd=" Đặt hàng trước "."Mã sách ".(string)$slt->MaSach.", Tên sách ".$slt->TenDauSach;
                        $tb=DB::table('thongbao')
                        ->insert(['ThoiGian'=>Carbon::now(),'NoiDung'=>$nd,'MaKH'=>$MaKH]);
                    }

                }




            }


            //
            $tongtien=Cart::total(0,'.','');
            $b=(string)$tongtien;
            $noidung="Đặt hàng thành công, "."Số hóa đơn ".$SoHD." Tổng tiền ".$b;

            $thongbao=DB::table('thongbao')
            ->insert(['ThoiGian'=>Carbon::now(),'NoiDung'=>$noidung,'MaKH'=>$MaKH]);


            $noidung="Khách hàng ".$tenKH." đã đặt hàng, Số hóa đơn ".$SoHD;
            Cart::destroy();

        return redirect()->route('shop');
    }

    public function get_thanhtoan(){
        if(Cart::count()==0) return redirect()->route('giohang')->with('danger','Xin lỗi chưa có sản phẩm nào trong giỏ hàng');
        if (Auth::check()==false && (Auth::guard('member')->check()==false)) return redirect()->route('homepage');
        else {
        $content=Cart::content();
        $total=Cart::total(0,'.','');
        $count=Cart::count();
        $tax=Cart::tax(0,'.','');
        $subtotal=Cart::subtotal(0,'.','');
        if (Auth::check())

            {
                $name=Auth::user()->name;
                return redirect()->route('giohang')->with('success','Lỗi! Không thể đặt hàng');
            }
        if (Auth::guard('member')->check()) $name=Auth::guard('member')->user()->name;

            $thanhtoan=DB::table('khachhang')
            ->join('member','khachhang.MaKH','=','member.MaKH')
            ->where('name','=',$name)
            ->first();


            return view('banhang.thanhtoan',compact('content','total','count','subtotal','tax','thanhtoan'));
        }
    }
}
