 <div class="widget aside">
					<div class="space20">&nbsp;</div>
					<h3 class="widget-title">Sách Bán chạy </h3>
					<div class="widget-body">
						@foreach($sanphamnoibat as $value)

						<div class="beta-sales beta-lists">
							<div class="media beta-sales-item">
								<a class="pull-left" href="{{route('ctsach',[$value->MaSach])}}"><img src="source/bootstrap/images/{{$value->HinhAnh}}" alt="" width="80"></a>
								<div class="media-body"style="font-family:verdama; font-size: 16px">
									{{$value->TenDauSach}}
									<span class="beta-sales-price" style="font-family:verdama; font-size: 16px">
										@if($value->DonGiaSale==0)

			                        <span>{{$value->DonGia}} vnđ</span>

				                    @endif
				                    @if($value->DonGiaSale!=0)
				                    <span class="flash-del" >{{$value->DonGia}} vnđ</span>
				                    <span class="flash-sale" >{{$value->DonGiaSale}} vnđ</span>
				                    @endif 
									</span>
								</div>	
							</div>
						</div>	
				@endforeach	
			</div>
		</div>
