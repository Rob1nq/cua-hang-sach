@extends('include/master')
@section('title','Phiếu nhập')
@section('content')

<div class="col-md-10">  
<style>
	.my-custom-scrollbar {
	position: relative !important;
	height: 200px !important;
	overflow: auto !important;
	}
	.table-wrapper-scroll-y {
	display: block !important;
	}
</style>       
        <form action="{{ route('chitietphieunhap')}}" method="POST">
        {{ csrf_field() }}  

	        <table class="table">
	            <thead>
	               <tr align="center">

	                  <th colspan="2"><h3>THÔNG TIN PHIẾU NHẬP</h3></th>       
	                  	
           
	               </tr>

	            </thead>
	            <tr>
					<td>
					    Ngày nhập
						<input type="date" class="form-control" name="ngaynhap"  autocomplete="true" >
					</td>
					<td>
	            		Tổng tiền
	            		<input type="text" class="form-control"  name="tongtien" placeholder="Tổng tiền"
	            		value="{{$tongtien}}">
	            	</td>	
	            

			</tr>
	           

	            <tr>
	            	<td colspan="2">
	            		<fieldset>
	            			<legend>&nbsp;Chi tiết phiếu nhập &nbsp;</legend>

		            		<form action="{{ route('phieu-nhap')}}" method="POST">
		            			 {{ csrf_field() }} 	
		            			<table class="table">

						            
						            <tr>
						            	
						            	<td >
						            		Chọn sách <br>
						            		<select name="masach" id="masach" class="form-control"   >
						            			@foreach($dausach as $s)
						            				<option value="{{$s->MaSach}}">{{$s->TenDauSach}}</option>

						           				@endforeach

						            			

						            		</select>
						            		
						            	</td>
						            	<td>
						            		Số lượng nhập <br>
						            		<input type="text"  class="form-control" name="soluongnhap" placeholder="Số lượng nhập" id="soluongnhap">
						            	</td>

						            	
						            </tr>
						            <tr>
						            	
						            	<td>
						            		Đơn giá nhập <br>
						            		<input type="text"  class="form-control" name="dongianhap" placeholder="Đơn giá nhập" id="dongianhap">
						            	</td>
						            	<td colspan="2">
						            		Thành tiền
						            		<input type="text" class="form-control" name="thanhtien" placeholder="Thành tiền" id="thanhtien"  onclick ="add(dongianhap.value,soluongnhap.value)">
						            		<script>
						            			function add(x,y)
												{
													 y=document.getElementById("dongianhap").value;
													 x=document.getElementById("soluongnhap").value;
													 document.getElementById("thanhtien").value=y*x;

												}
						            		</script>
						            	</td>
						            </tr>
						            <tr>
						            	<td colspan="2">
						            		<input type="submit" value="Thêm" formaction="{{route('phieu-nhap')}}">
		            						<input type="reset" value="Hủy">		            		
						            	</td>
						            </tr>
						            <tr>
						            	<td colspan="2">
						            		<div class="table-wrapper-scroll-y my-custom-scrollbar"> 
         										<table class="table table-bordered table-striped mb-0 " bgcolor="white">
         											<tr>
         												<th>STT</th>								
	         											<th>Mã Sách</th>
	         											<th>Số lượng nhập</th>
	         											<th>Đơn giá nhập</th>
	         											<th>Thành tiền</th>
	         											<th>Xóa</th>
	         										</tr>
	         										<p style="display:none">{{$i=1}}</p>
	         										@foreach($bangnhap as $value)
	         										<tr>
	         											<td>{{$i++}}</td>
	         											<td>{{$value->MaSach}}</td>
	         											<td>{{$value->SoLuongNhap}}</td>
	         											<td>{{$value->DonGiaNhap}}</td>
	         											<td>{{$value->ThanhTien}}</td>
	         											<td align="center"><a href="{{route('xoactpn',[$value->MaSach])}}" class="fa fa-trash"></a></td>
	         										</tr>
	         										@endforeach


         										</table>
						            	</td>
						            </tr>
						        </table>
						        @include('errors/errors')
				        </form>
				    </fieldset>
			        </td>

	        </tr>
	        
	            
	           
	        <tr>
	           	<td colspan="2" style="text-align: right">
	            	<input type="submit" value="Thêm">
	            	<input type="reset" value="Hủy">
	           	</td>
	        </tr>


	           
	        </table>
	       

			 
		</form>
		
        </div>   
@endsection