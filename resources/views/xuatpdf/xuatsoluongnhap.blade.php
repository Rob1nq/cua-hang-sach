
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
			<h4 align="center">Doanh thu tháng {{$id}}</h4>
	        	<table class="table" align="center">
	        		<tr>
					<th>Mã sách</th>
					<th>Tên Sách</th>
					<th>Thể loại</th>
					<th>Số lượng bán</th>
					<th>Doanh thu</th>

				</tr>
				{{-- @foreach($doanhthu as $value)
				<tr>
					
					<td>
					{{$value->MaSach}}						
					</td>
					<td>
					{{$value->TenDauSach}}						
					</td>
					<td>
					{{$value->TenTheLoai}}						
					</td>
					<td>
						{{$value->SL}}
					</td>
					<td>
						{{$value->TT}} vnđ
					</td>
				</tr>	
				@endforeach	 --}}
	        		
	        	</table>
	        </div>
	        <div class="col-md-4"></div>
	</div>
</body>
</html>

