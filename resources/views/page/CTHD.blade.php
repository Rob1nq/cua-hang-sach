@extends('include/master')
@section('title','Chi tiết hóa đơn')
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
		<h3 align="center">CHI TIẾT HÓA ĐƠN</h3>

		<form action="#">
			<div class="table-wrapper-scroll-y my-custom-scrollbar">
 
         	<table class="table table-bordered table-striped mb-0 "  bgcolor="white">
				
				<tr>
					<th>Số HD</th>
					<th>Tên Sách</th>
					<th>Số lượng bán</th>
					<th>Đơn giá bán</th>
					<th>Thành tiền</th>
				</tr>
				@foreach($cthd as $value)
				<tr>
					<td align="center">
					{{$value->SoHD}}	
					</td>
					<td>
					{{$value->TenDauSach}}	

					</td>
					<td>
					{{$value->SoLuongBan}}	
	
					</td>
					<td>
					{{$value->DonGiaBan}}						
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