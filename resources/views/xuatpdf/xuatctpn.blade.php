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
			<h4 align="center">Chi tiết các phiếu nhập</h4>
	        	<table class="table" align="center">
	        		<tr>
					<th>Mã phiếu nhập</th>
					<th>Mã sách</th>
					<th>Tên đầu sách</th>
					<th>Số lượng nhập</th>
					<th>Đơn giá nhập</th>
					<th>Thành tiền</th>

				</tr>
				@foreach($ctpn as $value)
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
	        <div class="col-md-4"></div>
	</div>
</body>
</html>

