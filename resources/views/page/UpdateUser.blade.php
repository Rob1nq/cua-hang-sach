
@extends('include/master')
@section('title','User')
@section('content')
	<div class="col-md-10">
		<br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<h4>CẬP NHẬT THÔNG TIN</h4>
				<br>
				<form action="{{route('postUpdateUser')}}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">					
					<div class="form-group">
						<input type="text" name="id" style="display: none" value="{{$data->id}}">
						
						<p class="fa fa-user"><b>&nbsp;Tên tài khoản </b></p> <br>
						<input type="text" disabled  class="form-control" name="username" value="{{$data->name}}">
						<br>
						<p class="fa fa-lock"><b>&nbsp;Password</b></p> <br>
						<input type="password"  name="password" class="form-control"  >
						<br>
						
						<p class="fa fa-envelope-o"><b>&nbsp;Email</b></p> <br>
						<input type="email"  name="email" class="form-control" value={{$data->email}} required>
						<br>
						LevelUser &nbsp; &nbsp; 
						@if($data->level==1) 
						<input type="radio" name="level"  value="1" checked> Admin  &nbsp; &nbsp;
						<input type="radio" value="0" name="level">User

						@endif
						@if($data->level==0) 
						 	<input type="radio" name="level"  value="1" > Admin  &nbsp; &nbsp;
							<input type="radio" checked value="0" name="level">User

						@endif
						<br>
						<br>
						<input type="submit" value="Cập nhậts" required> <input type="reset" value="Hủy">

						

					</div>
					@if (session('success'))
		            <div class="alert alert-success">
		                  <p>{{ session('success') }}</p>
		            </div>
		            @endif
		           
				</form>

				
			</div>
			<div class="col-md-4"></div>
			
		</div>
    	
    </div>
@endsection