@extends('include/master')
@section('title','User')
@section('content')
	<div class="col-md-10">
		<br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<h4>THÊM THÀNH VIÊN</h4>
				@include('errors/errors')
				<br>
				<form action="{{route('postAddUser')}}" method="POST">
				    {{ csrf_field() }}
					<div class="form-group">
						<p class="fa fa-user"><b>&nbsp;Tên tài khoản</b></p> <br>
						<input type="text" class="form-control" name="username" >
						<br>
						<p class="fa fa-lock"><b>&nbsp;Mật khẩu</b></p> <br>
						<input type="password" name="password" class="form-control" >
						<br>
						
						<p class="fa fa-envelope-o"><b>&nbsp;Email</b></p> <br>
						<input type="email" name="email" class="form-control" >
						<br>
						LevelUser &nbsp; &nbsp; <input type="radio" name="level" value="1"> Admin  &nbsp; &nbsp;<input type="radio" name="level" value="0" >User
						<br><br>
						<input type="submit" value="Thêm"> <input type="submit" value="Hủy">

					</div>
				</form>
				

				
			</div>
			<div class="col-md-4"></div>
			
		</div>
    	
    </div>
@endsection