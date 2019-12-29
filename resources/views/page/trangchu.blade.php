
	@extends('include/master')
	@section('title','Admin')
	@section('content')
	<script src="source/js/highcharts.js"></script>
	<script src="source/js/exporting.js"></script>
	<script src="source/js/export-data.js"></script>
	<script src="source/js/chart.js"></script>
		<div>
			
			{{-- <div style="width: 50rem"> --}}
				<br>
				<div  style="padding-left: 50px;width: 500p;min-width: 50vh;"><li class="fa fa-thumb-tack"></li> Tổng doanh thu tháng này {{$doanhthu}} vnđ <br>
				<li class="fa fa-thumb-tack"></li> Số lượng bán trong tháng:  {{$soluongban}} sản phẩm 
				<br>	
				{{-- <li class="fa fa-thumb-tack"></li> Số lượng nhập trong tháng:  </li> --}}
				</div>
				<br>
				<br>
				
			
					<div id="chart" style="padding-right: 50px;padding-left: 50px;  width: 150vh" data-order="{{ $month }}"></div>
				
			</div>
		
		</div>

	@endsection
