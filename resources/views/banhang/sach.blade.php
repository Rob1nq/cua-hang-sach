<div class="col-sm-9 ">
	<div class="space20">&nbsp;</div>
	<style>
		.fa{
		    font-size: 17px !important;
		    /* line-height: 17px !important; */
  			}  
	</style>
	@foreach($sach as $s)

	<div class="row">

		<div class="col-sm-4">

			<div class="single-item">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
				 			<div class="single-item">
                            @if($s->DonGiaSale!=0)
                              <div class="ribbon-wrapper">
                                <div class="ribbon sale">Sale</div>
                              </div>
                            @endif
                        </div>
                <div class="single-item-header">
                 	<a ><img src="source/bootstrap/images/{{$s->HinhAnh}}" alt=""></a>
                </div>
                <script src="//code.jquery.com/jquery.min.js"></script>
			    <script src="source/js/countdown.js"></script>  
			    <div class='countdown' data-date="{{$s->NgayRaMat}}" style="margin-left: 10px;">></div>
			    <div class="space40">&nbsp;</div>
            </div>
		</div>
		<div class="col-sm-8">
			
			<div class="single-item-body">
				<p class="single-item-title" ><h4>{{$s->TenDauSach}}</h4></p>
				<p class="single-item-price">
					{{-- <span><b>{{$s->DonGia}} vnđ</b></span> --}}					
					@if($s->DonGiaSale==0)
                        <span>{{$s->DonGia}} vnđ</span>
                    @endif
                    @if($s->DonGiaSale!=0)
                    <span class="flash-del" >{{$s->DonGia}} vnđ</span>
                    <span class="flash-sale" >{{$s->DonGiaSale}} vnđ</span>
                    @endif 
				</p>
			</div>
			<div class="clearfix"></div>
			<div class="space20">&nbsp;</div>

			<div class="single-item-desc">
				<p>{{$s->MoTa}}</p>
			</div>
			<div class="space20">&nbsp;</div>
						
			<div class="single-item-caption">
			{{-- <form method="POST" action=""> --}}
				@if($s->NgayRaMat > $dattruoc)
					<a onclick="alert('Đặt trước thành công ! Vui lòng thanh toán trước')" class="beta-btn primary"  href="{{route('themgiohang',[$s->MaSach])}}" style="margin-left: 10px;">Đặt hàng trước<i class="fa fa-chevron-right"></i></a>
				@endif
				@if($s->NgayRaMat <= $dattruoc)
                <a class="add-to-cart pull-left" style="cursor: pointer" id="{{$s->MaSach}}" {{-- href="{{route('themgiohang',[$s->MaSach])}}" --}}>
                    <i class="fa fa-shopping-cart"></i>
                </a>
                <input class="form-control" value="1" min=1 name="qty" type="number" style="width: 70px" >
                @endif
				
            {{-- </form> --}}
                               
            <div class="clearfix"></div>
        </div>			

	</div>
</div>

	<div class="space40">&nbsp;</div>
	<div class="woocommerce-tabs">
		<ul class="tabs">
			<li><a >Mô tả</a></li>
		</ul>

	<div class="panel" id="tab-description">
		<table class="table">
			<tr>
				<td>Nhà xuất bản</td>
				@foreach($nhaxuatban as $nxb)
				<td>{{$nxb->TenNXB}}</td>
				@endforeach
			</tr>
			<tr>
				<td>Năm XB</td>
				<td>{{$s->NamXB}}</td>
			</tr>
			<tr>
				<td>Thể loại</td>
				<td>{{$s->TenTheLoai}}</td>
			</tr>
			<tr>
				<td>Tác giả</td>
				<td>
				@foreach($tacgia as $tg)

				{{$tg->TenTacGia}}
				&nbsp;
				@endforeach
			</td>
			</tr>
			<tr>
				<td>Tên Sách</td>
				<td id="tendausach">{{$s->TenDauSach}}</td>
			</tr>
			
		</table>
	</div>
</div>
	@endforeach
	<script>
		$(document).ready(function() {
                $('.add-to-cart.pull-left').click(function() {
                var qty=$('input[name=qty]').val();
                var rowId=$(this).attr('id');
                var token=$('input[name=_token]').val();
                // aler(qty);
                
                 
                  $.ajax({
                  url:"{{route('addcart')}}",
                  type:'POST',
                  cache:false,
                  data:{"_token":token,"qty":qty,"id":rowId},
                  success: function(data){
                      if (data=='oke'){
                        alert('Thêm thành công !');
                       	window.location.href="{{route('shop')}}";

                      } 
                      else
                        alert('Thêm không thành công !');
                  }
                 })
                });
                
              });
	</script>

</div>