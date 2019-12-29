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

class AdminDoanhThu extends Controller
{
     public function get_doanhthu(Request $request){
        
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else 
        {      
         
            return view('page.doanhthu');

        }
    }
    public function post_Doanhthu(Request $request)
    {
        if ($request->ajax()) {

            $month=$request->input('month');
            $doanhthu = DB::table('hoadon')
            ->select(DB::raw('sum(SoLuongBan) as SL,sach.MaSach,sum(Tongtien) as DT,TenDauSach,TenTheLoai, sum(ThanhTien) as TT'))
            ->join('cthd','cthd.SoHD','=','hoadon.SoHD')
            ->join('sach','sach.MaSach','=','cthd.MaSach')
            ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
            ->join('theloai','theloai.MaTheLoai','=','dausach.MaTheLoai')
            ->whereMonth('NgayLap','=',$month)
            ->groupBy('sach.MaSach','TenDauSach','TenTheLoai')
            ->get();
            $output='';
            if (count($doanhthu)==0)
            {
                 $output.= "<tr><td colspan='5' align='center'>"."Chưa có dữ liệu."."</td></tr>";
                 echo $output;
            }

            else {
            foreach ($doanhthu as $dt) {
                            $output .= '<tr>
                            <td>' . $dt->MaSach .'</td>
                            <td>' . $dt->TenDauSach . '</td>
                            <td>' . $dt->TenTheLoai. '</td>
                            <td>' . $dt->SL.'</td>
                            <td>' .$dt->TT.'</td>
                            </tr>';                                  
                           
                
            }

            $output .= "<tr><td colspan='5' align='center'>"."<button class='form-control btn-success' style='width:max-content; '>"."<a style='color:white;text-decoration:none' href='doanh-thu-pdf/{$month}'>"."Xuất file"."</a>"."</button>"."</td></tr>";
            echo $output;
           

        }

        }

            
    }
   
}
