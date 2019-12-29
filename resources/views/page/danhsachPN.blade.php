@extends('include/master')
@section('title','Danh sách')
@section('content')

<div class="col-md-10"> 
  <style>
  .my-custom-scrollbar {
  position: relative;
  height: 450px !important;
  overflow: auto;
  }
  .table-wrapper-scroll-y {
  display: block;
}
  </style>
          <br>
          <h3 align="center">DANH SÁCH PHIẾU NHẬP </h3>

        
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
 
        <table class="table table-bordered table-striped mb-0 " bgcolor="white">
          
          <tr>
            <th>
              Mã phiếu nhập
            </th>
            <th>
              Ngày nhập
            </th>
            <th>
              Tổng tiền
            </th>
            <th>
              Chi tiết phiếu nhập
            </th>
            <th>
              Xuất file
            </th>
            
          </tr>
          @foreach($phieunhap as $pn)
            <tr>
              <td>
                {{$pn->MaPhieuNhap}}
              </td>
              <td>
                {{$pn->NgayNhap}}
              </td>
              <td>
                {{$pn->TongTien}}
              </td>
              <td>
                <a href="{{route('ct_phieunhap',[$pn->MaPhieuNhap])}}">Xem chi tiết</a>
              </td>
              <td align="center">
                <a href="{{route('CT_PhieuNhap_PDF',[$pn->MaPhieuNhap])}}" class="fa fa-file-pdf-o"></a>
              </td>
              
              
            </tr>
          @endforeach
           

        </table>
      </div>
      <div style="float: right; padding-right: 30px;padding-top: 10px"><button class="form-control btn-success" ><a  href="{{route('PhieuNhap_PDF')}}" style="color: white; text-decoration: none">Xuất File</a></button></div>

        
     </div>
@endsection 