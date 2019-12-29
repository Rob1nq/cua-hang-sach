{{-- @include('include/header') --}}
<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
</style>
<body style="font-family: Dejavu Sans">
	<div class="container">
		<div class="raw">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<h4 align="center">Thông tin các hóa đơn</h4>
	        	<table class="table" align="center">
	        		<tr>
					<th>Số HD</th>
					<th>Mã sách</th>
					<th>Tên đầu sách</th>
					<th>Số lượng bán</th>
					<th>Đơn giá bán</th>
					<th>Thành tiền</th>

				</tr>
				@foreach($hoadon as $value)
				<tr>
					<td>
					{{$value->SoHD}}						
					</td>
					<td>
					{{$value->MaSach}}						
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
	        <div class="col-md-4"></div>
	</div>
</body>
</html>

