<div class="col-md-9 ">
        <div class="navbar-light bg-light">
          <div class="card-header bg-secondary">
          <h6 align="center"><i class="fa fa-bars fa-2x">&nbsp;</i>SẢN PHẨM NỔI BẬT</h6>

          </div>
            <div id="content" class="space-top-none">
              <div class="main-content">
                <div class="space60">&nbsp;</div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="beta-products-list navbar-light bg-light">
                        <div class="row">
                          @foreach($sanphamnoibat as $s)
                          <div class="col-sm-3">
                            <div class="single-item">
                              @if($s->DonGiaSale!=0)
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>
                              @endif

                              <div class="single-item-header">
                                <a href="{{route('themgiohang',[$s->MaSach])}}"><img src="source/bootstrap/images/{{$s->HinhAnh}}" alt="" ></a>
                              </div>
                              <div class="single-item-body">
                                <p class="single-item-title">{{$s->TenDauSach}}</p>
                                <p class="single-item-price">
                                 {{--  <span class="flash-del" style="font-size: 0.8rem">{{$s->DonGia}} vnđ</span>
                                  <span class="flash-sale" style="font-size: 0.8rem">{{$s->DonGiaSale}} vnđ </span> --}}
                                  @if($s->DonGiaSale==0)

                                  <span style="font-size: 0.8rem"><b>{{$s->DonGia}} vnđ</b></span>

                                  @endif
                                  @if($s->DonGiaSale!=0)
                                  <span class="flash-del" style="font-size: 0.8rem">{{$s->DonGia}} vnđ</span>
                                  <span class="flash-sale" style="font-size: 0.8rem"><b>{{$s->DonGiaSale}} vnđ</b></span>
                                  @endif
                              
                              </div>
                              <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="{{route('themgiohang',[$s->MaSach])}}"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="{{route('ctsach',[$s->MaSach])}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                  {{-- <div class="space30">&nbsp;</div> --}}
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
