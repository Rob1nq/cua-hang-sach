@extends('include/master')
@section('title','Chi tiết Kh')
@section('content')
	<div class="col-md-10">
		<br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<h4>THÔNG TIN TÀI KHOẢN</h4>
				<br>
				{{-- <form action="{{route('postAddUser')}}" method="POST">
				    {{ csrf_field() }} --}}
					<div class="form-group">
						<p class="fa fa-user"><b>&nbsp;Mã tài khoản</b></p> <br>
						<input type="text" disabled class="form-control" name="username" value="{{$thongtin->id}}">
						<br>
						<p class="fa fa-user"><b>&nbsp;Tên tài khoản </b></p> <br>
						<input type="text" disabled class="form-control" name="username" value="{{$thongtin->name}}">
						<br>
						<p class="fa fa-key"><b>&nbsp;Password</b></p> <br>
						<input type="password" disabled name="password" class="form-control" value="{{$thongtin->password}}" required>
						<br>
						
						<p class="fa fa-envelope-o"><b>&nbsp;Email</b></p> <br>
						<input type="email" disabled  name="email" class="form-control" value={{$thongtin->email}} required>
						<br>
						Loại tài khoản &nbsp; &nbsp;<input type="radio" checked value="0">User
						

					</div>
				{{-- </form> --}}

				
			</div>
			<div class="col-md-4"></div>
			
		</div>
    	
    </div>
@endsection