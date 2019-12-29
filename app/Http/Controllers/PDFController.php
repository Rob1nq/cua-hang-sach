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
use PDF;

class PDFController extends Controller
{
    public function HoaDon_PDF(){
    	$hoadon=DB::table('hoadon')->join('khachhang','hoadon.MaKH','=','khachhang.MaKH')
    	->get();
    	$pdf = PDF::loadView('xuatpdf.xuathoadon',compact('hoadon'));
        return $pdf->download('Hoadon.pdf');
    }
    public function CT_HoaDon_PDF($id){
    	$hoadon=DB::table('cthd')
    	->join('sach','sach.MaSach','=','cthd.MaSach')
    	->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
    	->where('SoHD','=',$id)->get();  
    	$pdf = PDF::loadView('xuatpdf.xuatcthd',compact('hoadon'));
        return $pdf->download('cthd.pdf');
    }
    public function PhieuNhap_PDF(){

        $phieunhap=DB::table('phieunhap')->get();
        $pdf = PDF::loadView('xuatpdf.xuatphieunhap',compact('phieunhap'));
        return $pdf->download('phieunhap.pdf');

    }
    public function CT_PhieuNhap_PDF($id)
    {
       $ctpn=DB::table('ct_phieunhap')
        ->join('sach','sach.MaSach','=','ct_phieunhap.MaSach')
        ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
        ->where('MaPhieuNhap','=',$id)->get();  
        $pdf = PDF::loadView('xuatpdf.xuatctpn',compact('ctpn'));
        return $pdf->download('ctpn.pdf'); 
    }
    public function DoanhThu_PDF($id)
    {
            $doanhthu = DB::table('hoadon')
            ->select(DB::raw('sum(SoLuongBan) as SL,sach.MaSach,sum(Tongtien) as DT,TenDauSach,TenTheLoai, sum(ThanhTien) as TT'))
            ->join('cthd','cthd.SoHD','=','hoadon.SoHD')
            ->join('sach','sach.MaSach','=','cthd.MaSach')
            ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
            ->join('theloai','theloai.MaTheLoai','=','dausach.MaTheLoai')
            ->whereMonth('NgayLap','=',$id)
            ->groupBy('sach.MaSach','TenDauSach','TenTheLoai')
            ->get();
            $pdf = PDF::loadView('xuatpdf.xuatdoanhthu',compact('doanhthu','id'));
            return $pdf->download('doanhthu.pdf'); 

    }
    public function SoLuongNhap_PDF($id){
        

    }


}
