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
        <h3 align="center">THÔNG TIN ĐƠN HÀNG</h3>        
        <div class="table-wrapper-scroll-y my-custom-scrollbar"> 
        <table class="table table-bordered table-striped mb-0 ">
        	<tr bgcolor="#c0c0c0">
        		<td>
        			STT
        		</td>
                <td>
                    Số HĐ
                </td>
        		<td>
        			Ngày Mua
        		</td>
        		<td>
        			Tên sách
        		</td>
                <td>
                    Tổng tiền
                </td>
        		
        	</tr>
        	<p style="display:none">{{$i=1}}</p>
        	@foreach($donhang as $value)
        	<tr>
        		<td>
        		{{$i++}}
        		</td>
                <td>
                {{$value->SoHD}}
                </td>
        		<td>
        		{{$value->NgayLap}}	
        		</td>
        		<td>
        		{{$value->TenDauSach}}	
        		</td>
                <td>
                {{$value->ThanhTien}} vnđ
                </td>
        		
        	</tr>
        	@endforeach
        </table>
    </div>
			
@endsection