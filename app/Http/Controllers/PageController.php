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
class pageController extends Controller
{


    public  function get_index(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
            $month=DB::table('hoadon')
            ->select((DB::raw('month(NgayLap) as NL')),DB::raw('sum(Tongtien) as DT'))
            ->groupby('NL')
            ->get();
            // dd($month);
            $thang=Carbon::now()->month;
            foreach($month  as $value)
            {
                if ($value->NL==$thang)
                $doanhthu=$value->DT;
            }

            $ds=DB::table('hoadon')
            ->select(DB::raw('sum(cthd.SoLuongBan) as SL'),DB::raw('month(hoadon.NgayLap) as NL'))
            ->join('cthd','hoadon.SoHD','=','cthd.SoHD')
            ->groupby('NL')
            ->get();
            foreach ($ds as $value) {
                if (Carbon::now()->month==$value->NL)
                    $soluongban=$value->SL;

            }

            return view('page.trangchu',compact('month','doanhthu','soluongban'));


        }
    }



    public function get_taikhoan(){
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');

        }
        else {
            return view('page.taikhoan');
        }
    }
    public function get_home(){

        $date=Carbon::now()->toDateString();
        $sach = DB::table('sach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('theloai','theloai.MaTheLoai','=','dausach.MaTheLoai')
        ->where(function($query)
            {
                $query->where('DonGiaSale','<>',0)
                      ->where('NgayRaMat','<',Carbon::now()->toDateString())
                      ->where('SoLuongTon','>',0);
            })->get();
        //dd($sach);
        $count=Cart::count();
        // Sản phẩm nổi bật
        $madausach=DB::table('sach')
        ->select(DB::raw('sach.MaDauSach,sum(SoLuongBan) as SL'))
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('cthd','cthd.MaSach','=','sach.MaSach')
        ->join('hoadon','hoadon.SoHD','=','cthd.SoHD')
        ->whereYear('NgayLap','=',Carbon::now()->toDateString())
        ->groupby('sach.MaDauSach')
        ->orderby('SL')
        ->Limit(8)
        ->get();
        // dd($madausach);

        $tmp=[];

         foreach($madausach as $value)
         {
            array_push($tmp, $value->MaDauSach);

         }
        $sanphamnoibat=DB::table('dausach')
        ->join('sach','dausach.MaDauSach','=','sach.MaDauSach')
        ->wherein('sach.MaDauSach',$tmp)
        ->Limit(4)
        ->get();
        //Sản phẩm tháng
        $month=Carbon::now()->month;
        $sanphamthang=DB::table('sach')
        ->select(DB::raw('TenDauSach,sach.MaSach,DonGiaSale,DonGia,HinhAnh'))
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('cthd','cthd.MaSach','=','sach.MaSach')
        ->join('hoadon','hoadon.SoHD','=','cthd.SoHD')
        ->whereMonth('NgayLap','=',$month)
        ->groupby('TenDauSach','sach.MaSach','DonGiaSale','DonGia','HinhAnh')
        ->limit(4)->get();
        // Sản phẩm sắp ra mắt
        $sanphammoi=DB::table('sach')
        ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
        ->where('NgayRaMat','>',Carbon::now()->toDateString())
        ->get();

        //dd($sanphammoi);

        $MaDauSach=DB::table('sach')
        ->select('sach.MaDauSach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('cthd','cthd.MaSach','=','sach.MaSach')
        ->join('hoadon','hoadon.SoHD','=','cthd.SoHD')
        ->whereYear('NgayLap','=',Carbon::now()->toDateString())
        ->groupby('sach.MaDauSach')
        ->orderby('SoLuongBan')
        ->Limit(8)
        ->get();

        $tmp=[];

         foreach($MaDauSach as $value)
         {
            array_push($tmp, $value->MaDauSach);

         }
        $banchay=DB::table('dausach')
        ->join('sach','dausach.MaDauSach','=','sach.MaDauSach')
        ->wherein('sach.MaDauSach',$tmp)
        ->get();



        return view('banhang.homepage',compact('sach','count','sanphamnoibat','sanphamthang','sanphammoi','banchay'));
    }
    public function get_shop(){

        $date=Carbon::now()->toDateString();

        $sach = DB::table('sach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('theloai','theloai.MaTheLoai','=','dausach.MaTheLoai')
        ->where(function($query){
            $query->where('NgayRaMat','<',Carbon::now()->toDateString())
            ->where('SoLuongTon','>',0);

        })->paginate(8);
        //dd($sach);

        $count=Cart::count();

        return view('banhang.shop',compact('sach','count'));
    }
    public function get_ctsach($id){

        $sach = DB::table('sach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('theloai','theloai.MaTheLoai','=','dausach.MaTheLoai')
        ->where('MaSach','=',$id)
        ->get();
        $nhaxuatban=DB::table('nhaxuatban')
        ->join('sach','sach.MaNXB','=','nhaxuatban.MaNXB')
        ->where('MaSach','=',$id)
        ->get();
        $tacgia=DB::table('tacgia')
        ->join('ct_tacgia','tacgia.MaTacGia','=','ct_tacgia.MaTacGia')
        ->join('dausach','dausach.MaDauSach','=','ct_tacgia.MaDauSach')
        ->join('sach','sach.MaDauSach','=','dausach.MaDauSach')
        ->where('MaSach','=',$id)
        ->get();
        $count=Cart::count();



        $madausach=DB::table('sach')
        ->select('sach.MaDauSach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->join('cthd','cthd.MaSach','=','sach.MaSach')
        ->join('hoadon','hoadon.SoHD','=','cthd.SoHD')
        ->whereYear('NgayLap','=',Carbon::now()->toDateString())
        ->groupby('sach.MaDauSach')
        ->orderby('SoLuongBan')
        ->Limit(8)
        ->get();

        $tmp=[];

         foreach($madausach as $value)
         {
            array_push($tmp, $value->MaDauSach);

         }
        $sanphamnoibat=DB::table('dausach')
        ->join('sach','dausach.MaDauSach','=','sach.MaDauSach')
        ->wherein('sach.MaDauSach',$tmp)
        ->get();
        $sanphammoi=DB::table('sach')
        ->join('dausach','sach.MaDauSach','=','dausach.MaDauSach')
        ->whereRaw('DATEDIFF(current_date,NgayRaMat) <=5')
        ->Limit(5)
        ->get();
        //dd($sanphammoi);
        $dattruoc=Carbon::now()->toDateString();
        return view('banhang.ct_sach',compact('sach','nhaxuatban','tacgia','count','sanphamnoibat','sanphammoi','dattruoc'));

    }
    public function donhang(){
        $makh=Auth::guard('member')->user()->MaKH;
        $donhang=DB::table('hoadon')
        ->join('cthd','hoadon.SoHD','=','cthd.SoHD')
        ->join('sach','cthd.MaSach','=','sach.MaSach')
        ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
        ->where('hoadon.MaKH','=',$makh)
        ->get();
        $count=Cart::count();
        return view('banhang.donhang',compact('donhang','count'));
    }

}
