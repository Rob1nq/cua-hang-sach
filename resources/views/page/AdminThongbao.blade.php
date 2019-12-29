@extends('include/master')
@section('title','User')
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
<div class="col-md-12">
		<br>
		
				<div class="table-wrapper-scroll-y my-custom-scrollbar">
					<h4 align="center">THÔNG BÁO</h4>
 
        			<table class="table table-bordered table-striped mb-0 ">
        				<tr>
        					<th>
        						STT
        					</th>
        					<th>
        						Nội dung
        					</th>
        					<th>
        						Người gửi
        					</th>
        					<th>
        						Email
        					</th>
        					<th>
        						Thời gian
        					</th>
        					<th>
        						Xóa
        					</th>

        				</tr>
        				<p style="display: none">{{$i=1}}</p>
        				@foreach($thongbao as $value)
        				<tr>
        					<td>{{$i++}}</td>
        					<td>{{$value->NoiDung}}</td>
        					<td>{{$value->NguoiGui}}</td>
        					<td>{{$value->Email}}</td>
        					<td>{{$value->ThoiGian}}</td>
        					<td><a href="{{route('AdminXoaThongBao',[$value->id])}}" class="fa fa-trash"></a></td>
        				</tr>
        				@endforeach

						
					</table>
			</div>
	</div>
    	
</div>
@endsection