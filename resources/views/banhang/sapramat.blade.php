   
		<div class="card-header bg-secondary">
	      	<h6 align="center">
            <i class="fa fa-clock-o fa-2x" >&nbsp;</i>SẢN PHẨM SẮP RA MẮT           
  
          </h6>
   		</div>
        <div class="navbar-light bg-light">
          <div id="content" class="space-top-none">
            <div class="main-content">
              <div class="space60">&nbsp;</div>
              <div class="row">

                <div class="col-sm-12">

                  <div class="beta-products-list">
                    <div class="row">
                      {{--  --}}
                      @foreach($sanphammoi as $value)

                      <div class="col-sm-3">
                        <div class="single-item">

                          @if($value->DonGiaSale!=0)
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>
                          @endif

                          <div class="single-item-header">
                            <a href="{{route('ctsach',[$value->MaSach])}}"><img src="source/bootstrap/images/{{ $value->HinhAnh}}" alt=""></a>
                          </div>

                          <div class="single-item-body">
                            <p class="single-item-title" style="font-size: 0.8rem">{{ $value->TenDauSach}}</p>
                            <p class="single-item-price">
                              <span id="time"></span>

                                @if($value->DonGiaSale==0)

                                  <span style="font-size: 0.8rem">{{$value->DonGia}} vnđ</span>

                                @endif
                                @if($value->DonGiaSale!=0)
                                  <span class="flash-del" style="font-size: 0.8rem">{{$value->DonGia}} vnđ</span>
                                  <span class="flash-sale" style="font-size: 0.8rem">{{$value->DonGiaSale}} vnđ</span>
                                @endif 

                            </p>
                          </div>      
							
                          <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="{{route('themgiohang',[$value->MaSach])}}"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="{{route('ctsach',[$value->MaSach])}}" >Chi tiết<i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                          
                    </div>
                  
                  </div>
                </div>
              </div>             
            </div>
          </div>
        </div>
  
