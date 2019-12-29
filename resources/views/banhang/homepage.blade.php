@extends('include/layouts')
@section('title','Trang chủ')

@section('noidung')
		@include('/banhang/slider')
    	<div class="dropdown-divider"></div>
    	<div class="row">
			@include('/banhang/sp_noibat')
			@include('/banhang/sapramat')
			{{-- <div class="dropdown-divider"></div> --}}
			@include('/banhang/sp_bantheotuan')
			@include('banhang/sp_sale')
			@include('/banhang/danhmuc')
			{{-- San pham ban chay --}}	
			@include('banhang/spbanchay')		   

		</div>
		</div>
@endsection