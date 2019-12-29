<head>
@extends('include/master')
@section('title','User')
<head><base href=".././">
<style>
  .fa,.fa-user {
    padding-top: 0.7rem !important;
    font-size: 17px !important;
    line-height: 17px !important;
  }  
</style>
@section('content')
</head>
	<div class="col-md-10">
		<br>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<h4>CẬP NHẬT THÔNG TIN KH</h4>
				<br>
				@if (session('success'))
		            <div class="alert alert-success">
		                  <p>{{ session('success') }}</p>
		            </div>
		            @endif
				<form action="{{route('postTK')}}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">					
					<div class="form-group">
						<input type="text" name="id" style="display: none" value="{{$tk->id}}">
						
						<p class="fa fa-user"><b>&nbsp;Tên tài khoản </b></p> <br>
						<input type="text" disabled  class="form-control" name="username" value="{{$tk->name}}">
						<br>
						<p class="fa fa-lock"><b>&nbsp;Password</b></p> <br>
						<input type="password"  name="password" class="form-control"  >
						<br>
						
						<p class="fa fa-envelope-o"><b>&nbsp;Email</b></p> <br>
						<input type="email"  name="email" class="form-control" value="{{$tk->email}}" required>
						<br>
						LevelUser &nbsp; &nbsp; 
					
						<input type="radio" value="0" checked name="level">User					
						 
						<br>
						<br>
						<input type="submit" value="Cập nhật" ><input type="reset" value="Hủy">

					</form>


					</div>
					
		           

				
			</div>
			<div class="col-md-4"></div>
			
		</div>
    	
    </div>
@endsection