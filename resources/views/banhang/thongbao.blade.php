@extends('include/layouts')
@section('title','Thông báo')
@section('noidung')
	<div class="space40">&nbsp;</div>
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
        <h3 align="center">Thông báo</h3>        
        <div class="table-wrapper-scroll-y my-custom-scrollbar"> 
        <table class="table table-bordered table-striped mb-0 ">
        	<tr bgcolor="#c0c0c0">
        		<td>
        			STT
        		</td>
        		<td>
        			Thời gian
        		</td>
        		<td>
        			Nội dung
        		</td>
        		<td>
        			Xóa
        		</td>
        	</tr>
        	<p style="display:none">{{$i=1}}</p>
        	@foreach($thongbao as $value)
        	<tr>
        		<input type="text" style="display:none" value="{{$value->id}}">
        		<td>
        		{{$i++}}
        		</td>
        		<td>
        		{{$value->ThoiGian}}	
        		</td>
        		<td>
        		{{$value->NoiDung}}	
        		</td>
        		<td>
        		<a href="{{route('getXoaThongbao',[$value->id])}}" class="fa fa-trash">&nbsp;Xóa</a>
        		</td>
        	</tr>
        	@endforeach
        </table>
    </div>
			
@endsection