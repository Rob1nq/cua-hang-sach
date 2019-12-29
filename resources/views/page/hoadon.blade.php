
@extends('include/master')
@section('title','Hóa đơn')
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
		<h3 align="center">THÔNG TIN HÓA ĐƠN 	</h3>		
		<div class="table-wrapper-scroll-y my-custom-scrollbar"> 
         <table class="table table-bordered table-striped mb-0 "bgcolor="white" >		
			<tr align="center">
		
				
				<tr>
					<th>Số HD</th>
					<th>Mã KH</th>
					<th>Ngày lập Hóa đơn</th>
					<th>Tổng tiền</th>
					<th>Chi tiết hóa đơn</th>
					<th>Xuất file</th>
				</tr>
				@foreach($hoadon as $value)
				<tr>
					<td align="center">
					{{$value->SoHD}}						
					</td>
					<td align="center">
					{{$value->MaKH}}						
					</td>
					<td>
					{{$value->NgayLap}}						
					</td>
					<td>
					{{$value->TongTien}}						
					</td>
					<td align="center">
						<a href="{{route('cthd',[$value->SoHD])}}" ><i class="fa  fa-chevron-right"></i>Xem thông tin </a>
					</td>
					<td align="center">
						<a href="{{route('CT_HoaDon_PDF',[$value->SoHD])}}" class="fa fa-file-pdf-o"></a>
					</td>
				</tr>	
				@endforeach	
				
			</table>
		</div>
		<div style="float: right; padding-right: 30px;padding-top: 10px"><button class="form-control btn-success" ><a  href="{{route('HoaDon_PDF')}}" style="color: white; text-decoration: none">Xuất File</a></button></div>
		  
        
     </div>
     @endsection
