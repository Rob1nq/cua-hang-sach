@extends('include/layouts')
@section('title','Đăng kí')
@section('noidung')
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<br>
			<br>
		<form action="{{route('PostSignUp')}}" method="POST">
			{{ csrf_field() }}

			<table class="table">
				<tr>
					<th colspan="2" style="text-align: center"><h4>Đăng kí</h4></th>
				</tr>
				<tr>
					<td>
					<input type="text" class="form-control" placeholder="Tên đăng nhập" name="username">
					</td>				
					<td>
					<input type="text" class="form-control" name="hoten" placeholder="Họ Tên" >
					</td>
				</tr>
				<tr>
					<td>

					<input type="password" class="form-control" name="password" placeholder="Mật khẩu" >
					</td>
					<td>
				
		
					
					<input type="email" class="form-control" name="email" placeholder="Email" >
					</td>
				</tr>
				<tr>
					<td>
					<input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" >
					</td>
					<td>

					<input type="text" class="form-control" name="tel" placeholder="Số điện thoại"  >
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align:center">
					<button class="btn btn-success" style="color: white" type="submit">Đăng Kí</button>	
					<button  class="btn btn-success" style="color: white" type="reset">Hủy bỏ</button>

				</td>
			</tr>
		</table>
		@include('errors/errors')

	</form>
	</div>
		
                    <!--Form with header-->

	<div class="col-md-2">
			
	</div>
		
</div>
@endsection