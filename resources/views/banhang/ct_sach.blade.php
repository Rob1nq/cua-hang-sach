@extends('include/layouts')
@section('title','Thông tin sách')
</head>
@section('noidung')

	    <div class="space30">&nbsp;</div>
    	<div class="row navbar-light bg-light">
			@include('/banhang/sach')
			@include('/banhang/banchay')
			@include('/banhang/sanphammoi')	

		</div>

@endsection