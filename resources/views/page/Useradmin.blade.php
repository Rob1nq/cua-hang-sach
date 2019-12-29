@extends('include/master')
@section('title','User')
@section('content')
	<div class="col-md-10">
		<br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<h4>THÔNG TIN THÀNH VIÊN</h4>
				<br>
				{{-- <form action="{{route('postAddUser')}}" method="POST">
				    {{ csrf_field() }} --}}
					<div class="form-group">
						<p class="fa fa-user"><b>&nbsp;Mã thành viên</b></p> <br>
						<input type="text" disabled class="form-control" name="username" value="{{Auth::user()->id}}">
						<br>
						<p class="fa fa-user"><b>&nbsp;Tên tài khoản </b></p> <br>
						<input type="text" disabled class="form-control" name="username" value="{{Auth::user()->name}}">
						<br>
						<p class="fa fa-lock"><b>&nbsp;Mật khẩu</b></p> <br>
						<input type="password" disabled name="password" class="form-control" value="{{Auth::user()->password}}" required>
						<br>
						{{-- <p class="fa fa-key"><b>&nbsp;RePassword</b></p> <br>
						<input type="password" class="form-control" name="repassword" required>
						<br> --}}
						<p class="fa fa-envelope-o"><b>&nbsp;Email</b></p> <br>
						<input type="email" disabled name="email" class="form-control" value={{Auth::user()->email}} required>
						<br>
						LevelUser &nbsp; &nbsp; @if(Auth::user()->level==1) <input type="radio" name="level" disabled checked value="{{Auth::user()->level}}"> Admin  &nbsp; &nbsp;
						@endif
						 @if(Auth::user()->level==0)
						<input type="radio" checked value="{{Auth::user()->level}}" name="level">User
						@endif
						

					</div>
				{{-- </form> --}}

				
			</div>
			<div class="col-md-4"></div>
			
		</div>
    	
    </div>
@endsection