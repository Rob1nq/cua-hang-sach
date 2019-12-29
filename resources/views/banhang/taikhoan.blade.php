@extends('include/layouts')
@section('title','Tài khoản')
@section('noidung')
	<div class="space40">&nbsp;</div>		

	<div class="container">
		<div class="row"> 

				<div class="col-md-2"></div>

				<div class="col-md-8">         
		        {{-- <form action="" method="post"> --}}
		        {{ csrf_field() }}

		         <table class="table">
		            <thead>
		               <tr  bgcolor="white" >
		                  
		                  <th colspan="2" ><h3 align="center">Thông tin khách hàng</h3></th>                  
		               </tr>
		            </thead>

		            <tr>
		               <td>
		                  Tên đăng nhập		                  
		                  <input type="text" disabled class="form-control" value="{{$taikhoan->name}}" name="tendangnhap"> 
		                  <input type="text" name="id" style="display: none" value="{{$taikhoan->id}}">          
		                  
		               </td>
		               <td>
		                  Tên khách hàng
		                  <br>                 
		                  <input type="text" value="{{$taikhoan->HoTenKH}}" placeholder="Tên khách hàng" class="form-control" name="hoten" required>
		                  <input type="text" value="{{$taikhoan->MaKH}}" name="MaKH" style="display: none">
		               </td>
		            </tr>
		            
		            <tr>
		               <td>
		                  Địa chỉ
		                  <br>
		                  <input type="text" name="diachi" value="{{$taikhoan->DiaChi}}" class="form-control" placeholder="diachi" required>
		               </td>
		               <td>
		                  Email
		                  <br>
		                  <input type="email" value="{{$taikhoan->email}}" name="email" class="form-control" placeholder="Email" required>
		               </td>
		            </tr>   
		            <tr>
		               
		               <td>     
		                  
		                  Điện thoại
		                  <br>
		                  <input type="text" name="dienthoai" value="{{$taikhoan->DienThoai}}" class="form-control" placeholder="123456789" required>

		                  
		               </td>
		               <td>
		                Mật khẩu<br>
		                <input type="password" class="form-control"  name="password" placeholder="" required>
		                 
		               </td>	                  
		               
		            </tr>
		            		            
		            <tr>
		              <td colspan="2">

		                <div class="form-group" align="center">
							<button type="submit" id="btncapnhat"  class="beta-btn primary">Cập nhật<i class="fa fa-chevron-right"></i></button>
							<button type="reset" class="beta-btn primary">Hủy<i class="fa fa-chevron-right"></i></button>

						</div>
		                 
						
		                
		              </td>
		            </tr>
		           
		         </table>
		         {{-- </form> --}}
		         <script>
		         	$(document).ready(function() {
		                $('#btncapnhat').click(function() {
		                 var HoTenKH=$('input[name=hoten]').val();
		                 var token=$('input[name=_token]').val();
		                 var diachi=$('input[name=diachi]').val();;
		                 var email=$('input[name=email]').val();;
		                 var dienthoai=$('input[name=dienthoai]').val();;
		                 var matkhau=$('input[name=password]').val();
		                 var id=$('input[name=id]').val();
		                 var MaKH=$('input[name=MaKH]').val();
		                 //alert(matkhau);
			                  $.ajax({
			                  url:'{{route('postCannhatKH')}}',
			                  type:'POST',
			                  cache:false,
			                  data:{"_token":token,"id":id,"HoTenKH":HoTenKH,"DiaChi":diachi,"email":email,"DienThoai":dienthoai,"password":matkhau,"MaKH":MaKH},
			                  success: function(data){
			                      if (data=='oke'){
			                      	alert('Cập nhật thành công !');
			                        window.location.href="{{route('taikhoan')}}";
			                        
			                      } 
			                      else
			                        alert('Cập nhật không thành công !');
			                  }
			                 })
		                });
		                
		              });
		         </script>
		         
		         
		    </div>
		<div class="col-md-2"></div>
	</div>
	</div>
@endsection