
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
			<h4 align="center">Thông tin các phiếu nhập</h4>
	        	<table class="table" align="center">
	        		<tr>
	        			<td align="center">
	        			Mã phiếu nhập
	        			</td>
	        			<td>
	        			Ngày nhập
	        			</td>
	        			<td align="center"> 
	        			Tổng tiền 	
	        			</td>
	        			
	        		</tr>
	        		@foreach($phieunhap as $pn)
	        		<tr>
	        			<td>{{$pn->MaPhieuNhap}}</td>
	        			<td>{{$pn->NgayNhap}}</td>
	        			<td>{{$pn->TongTien}}</td>	        			        			
	        		</tr>
	        		@endforeach
	        		
	        	</table>
	        </div>
	        <div class="col-md-4"></div>
	</div>
</body>
</html>