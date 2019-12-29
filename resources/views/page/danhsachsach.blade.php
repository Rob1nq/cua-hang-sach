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
          <h3 align="center">DANH SÁCH SÁCH</h3>

        
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
 
        <table class="table table-bordered table-striped mb-0 " bgcolor="white">
          
          <tr>
            <th>
              Mã
            </th>
            <th>
              Tên đầu sách
            </th>
            <th>
              Nhà xuất bản
            </th>
            <th>
              Năm xuất bản
            </th>
            <th>Số lượng tồn</th>
            <th>
              Đơn giá
            </th>
            <th>
              Giá khuyến mãi
            </th>
          </tr>
          @foreach($sach as $s)
            <tr>
              <td>
                {{$s->MaSach}}
              </td>
              <td>
                {{$s->TenDauSach}}
              </td>
              <td>
                {{$s->TenNXB}}
              </td>
              <td>
                {{$s->NamXB}}
              </td>
              <td>{{$s->SoLuongTon}}</td>
              <td>
                {{$s->DonGia}}
              </td>
              <td>
                {{$s->DonGiaSale}}
              </td>
              
            </tr>
          @endforeach
           

        </table>
      </div>

        
     </div>
@endsection 