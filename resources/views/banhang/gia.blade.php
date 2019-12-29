@extends('include/layouts')
@section('title','Tìm kiếm')
@section('noidung')
	<div class="space40">&nbsp;</div>		

    	<div class="row">
			<div class="col-md-9 ">
        <div class="navbar-light bg-light">
          <div class="card-header bg-secondary">
          <h6 align="center"><i class=" fa fa-bars fa-2x">&nbsp;</i>Tìm kiếm</h6>
          </div>
            <div id="content" class="space-top-none">
              <div class="main-content">
                <div class="space60">&nbsp;</div>
                @if(count($sach)==0) 
                <div class="alert alert-danger" role="alert">
                  Không tìm thấy
                </div>
                @endif
                @if(count($sach)!=0)
                <div class="alert alert-success" role="alert">
                  Đã tìm thấy {{count($sach)}} sách có giá nhỏ {{$gia}}
                </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="beta-products-list">
                        <div class="row">
                          @foreach($sach as $s)
                          <div class="col-sm-3">
                            <div class="single-item">
                            @if($s->DonGiaSale!=0)
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>
                            @endif

                              <div class="single-item-header">
                                <a href="{{route('ctsach',[$s->MaSach])}}">
                                  <img src="source/bootstrap/images/{{$s->HinhAnh}}" alt=""></a>
                              </div>

                              <div class="single-item-body">
                                <p class="single-item-title" style="font-size: 0.8rem">{{$s->TenDauSach}}</p>
                                <p class="single-item-price">
                                  
                                @if($s->DonGiaSale==0)

                                  <span style="font-size: 0.8rem">{{$s->DonGia}} vnđ</span>

                                @endif
                                @if($s->DonGiaSale!=0)
                                  <span class="flash-del" style="font-size: 0.8rem">{{$s->DonGia}} vnđ</span>
                                  <span class="flash-sale" style="font-size: 0.8rem">{{$s->DonGiaSale}} vnđ</span>
                                  @endif                           

                              </div>

                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="{{route('themgiohang',[$s->MaSach])}}">
                                  <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a class="beta-btn primary" href="{{route('ctsach',[$s->MaSach])}}">Chi tiết 
                                  <i class="fa fa-chevron-right"></i>
                                </a>
                                <div class="space60">&nbsp;</div>

                              <div class="clearfix"></div>
                              </div>

                            </div>
                          </div>
                          @endforeach
         
                        </div>             
                      </div>
                     </div>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
          </div>

			{{--  --}}
			@include('/banhang/danhmuc')
    </div>

			
		 </div>
@endsection