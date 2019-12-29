@extends('include/master')
@section('title','Chi tiết phiếu nhập')
{{-- <base href="../source"> --}}
@section('content')
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
<div class="col-md-10">
		<br>
		<h3 align="center">CHI TIẾT PHIẾU NHẬP</h3>

		<form action="#">
			<div class="table-wrapper-scroll-y my-custom-scrollbar">
 
         	<table class="table table-bordered table-striped mb-0 " style="text-align: center">
				
				<tr>
					<th>Mã phiếu nhập</th>
					<th>Mã sách</th>
					<th>Tên Sách</th>
					<th>Số lượng nhập</th>
					<th>Đơn giá nhập</th>
					<th>Thành tiền</th>
				</tr>
				@foreach($ct_pn as $value)
				<tr>
					<td>
					{{$value->MaPhieuNhap}}	
					</td>
					<td>
					{{$value->MaSach}}	

					</td>
					<td>
					{{$value->TenDauSach}}	
	
					</td>
					<td>
					{{$value->SoLuongNhap}}						
					</td>
					<td>
					{{$value->DonGiaNhap}}	

					</td>
					<td>
						{{$value->ThanhTien}}
					</td>
				</tr>
				@endforeach
					
				
			</table>
		</div>
		</form>       
        
     </div>
     @endsection