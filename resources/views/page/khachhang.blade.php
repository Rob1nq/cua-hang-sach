@extends('include/master')
@section('title','Khách Hàng')
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
		<h3 align="center">THÔNG TIN KHÁCH HÀNG</h3>		
		<div class="table-wrapper-scroll-y my-custom-scrollbar"> 
         <table class="table table-bordered table-striped mb-0 " bgcolor="white">		
			<tr align="center">
				
				<th>Mã</th>
				<th>Họ và tên</th>
				<th>Địa chỉ</th>
				<th>Điện thoại</th>
				<th>Email</th>
				<th>Tài khoản</th>
				<th>Thao tác</th>
			</tr>
			@foreach($khachhang as $value)
			<tr>
				
				<td>{{$value->MaKH}}</td>
				<td>{{$value->HoTenKH}}</td>
				<td>{{$value->DiaChi}}</td>
				<td>{{$value->DienThoai}}</td>
				<td>{{$value->email}}</td>
				<td><a href="{{route('get_ctkh',[$value->id])}}">Chi tiết</a></td>
				
				<td align="center">{{-- <a href=""><span class="fa fa-trash"></span> </a> &nbsp &nbsp  --}}<a href="{{route('getTK',[$value->id])}}"><span class="fa fa-edit"></span></a></td>
			</tr>
			@endforeach
			
		</table>
	</div>

         
    </div>
    @endsection