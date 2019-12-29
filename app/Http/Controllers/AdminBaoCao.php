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

class AdminBaoCao extends Controller
{
    public function get_baocao()
    {
        if(Auth::guard('member')->check()==true)
        {
            return redirect()->route('AdminLogin');
            
        }
        else { 
                             
    	   return view('page.baocao');
        }
    } 
    public function post_baocao(Request $request)
    {
        
        if ($request->ajax()) {
        $month=$request->input('month');
        $SoLuongNhap= DB::table('sach')
        ->join('ct_phieunhap','ct_phieunhap.MaSach','=','sach.MaSach')
        ->join('phieunhap','phieunhap.MaPhieuNhap','=','ct_phieunhap.MaPhieuNhap')            
        ->select(DB::raw('sum(SoLuongNhap) as SLN'),DB::raw('sach.MaSach'))
        ->whereMonth('NgayNhap', '=',$month)
        ->groupby('sach.MaSach')->get();
                 
            
        $sach=DB::table('sach')
        ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
        ->get();
        $output='';

        if (count($SoLuongNhap)==0)
        {
             $output.= "<tr><td colspan='5' align='center'>"."Chưa có dữ liệu."."</td></tr>";
             echo $output;
        }

        else{        
         
                foreach($sach as $s)
                {  
                        $sl=0;
                        foreach($SoLuongNhap as $sln)
                        {
                            $kt=false;

                            if($sln->MaSach==$s->MaSach)
                            {
                                 $kt=true;
                                 $sl=$sln->SLN;
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
                                    $tong=$s->SoLuongTon+$sl;
                                    $output .= '<tr>
                                    <td>' . $s->MaSach .'</td>
                                    <td>' . $s->TenDauSach . '</td>
                                    <td>' . $sl.'</td>
                                    </tr>';
                                   
                                }
                                else {
                                    $tong=$s->SoLuongTon+$sl;
                                    $output .= '<tr>
                                    <td>' . $s->MaSach .'</td>
                                    <td>' . $s->TenDauSach . '</td>
                                    <td>' .$sl.'</td>
                                    </tr>';                            
                            }               
                         
                    }       
                    
                    echo $output;  

                }
            }
    }
    public function get_BaoCaosoluongban(){      

        return view('page.baocaosoluongban');
    }
    public function post_BaoCaosoluongban(Request $request)
    {
        if ($request->ajax()) {

            $month=$request->input('month');          
            $SoLuongBan= DB::table('sach')->join('cthd','cthd.MaSach','=','sach.MaSach')
            ->join('hoadon','hoadon.SoHD','=','cthd.SoHD')            
            ->select(DB::raw('sum(SoLuongBan) as SLB'),DB::raw('sach.MaSach'))
            ->whereMonth('NgayLap', '=',$month)
            ->groupby('sach.MaSach')->get(); 

            $sach=DB::table('sach')
            ->join('dausach','dausach.MaDauSach','=','sach.MaDauSach')
            ->get();

            $output='';   
            //dd($SoLuongBan);
            if (count($SoLuongBan)==0)
            {
                 $output.= "<tr><td colspan='5' align='center'>"."Chưa có dữ liệu."."</td></tr>";
                 echo $output;
            }

            else{
                foreach($sach as $s)
                {  
                        //$kt=false;
                        $sl=0;
                        $masach=$s->MaSach;
                        foreach($SoLuongBan as $slb)
                        {   
                            $kt=0;
                            if($masach==$slb->MaSach)
                            {
                                 $kt=1;
                                 $sl=$slb->SLB;
                                 break;
                            }
                            else 
                                {
                                    $kt=0;
                                    $sl=0;
                                }
                        }
                        if($kt==1) 
                                {
                                    $tong=$s->SoLuongTon;
                                    $output .= '<tr>
                                    <td>' . $s->MaSach .'</td>
                                    <td>' . $s->TenDauSach . '</td>
                                    <td>' . $sl.'</td>
                                    </tr>';
                                   
                                }
                        if($kt==0) {
                                    $tong=$s->SoLuongTon;
                                    $output .= '<tr>
                                    <td>' . $s->MaSach .'</td>
                                    <td>' . $s->TenDauSach . '</td>
                                    <td>' .$sl.'</td>
                                    </tr>';                            
                            }               
                         
                    }       
                    
                    echo $output;  
                }

        }
    }    
}
