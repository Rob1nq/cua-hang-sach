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
	        			<td align="center">
	        			Số hóa đơn
	        			</td>
	        			<td>
	        				Mã khách hàng
	        			</td>
	        			<td align="center"> 
	        			Họ tên khách hàng
	        			</td>
	        			<td align="center"> 
	        			Ngày lập hóa đơn
	        			</td>
	        			<td align="center">  
	        			Tổng tiền 
	        			</td>
	        		</tr>
	        		@foreach($hoadon as $hd)
	        		<tr>
	        			<td>{{$hd->SoHD}}</td>
	        			<td>{{$hd->MaKH}}</td>
	        			<td>{{$hd->HoTenKH}}</td>
	        			<td>{{$hd->NgayLap}}</td>
	        			<td>{{$hd->TongTien}}</td>	        			
	        		</tr>
	        		@endforeach
	        		
	        	</table>
	        </div>
	        <div class="col-md-4"></div>
	</div>
</body>
</html>