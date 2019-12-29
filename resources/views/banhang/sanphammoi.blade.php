			<div class="widget">
				<h3 class="widget-title">Sách Mới</h3>
					<div class="widget-body">
						@foreach($sanphammoi as $value)

							<div class="beta-sales beta-lists">

								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('ctsach',[$value->MaSach])}}" ><img src="source/bootstrap/images/{{$value->HinhAnh}}" alt=""></a>
									<div class="media-body" style="font-family:verdama; font-size: 16px">
										{{$value->TenDauSach}}
										<span class="beta-sales-price" style="font-family:verdama; font-size: 16px">{{$value->DonGia}}</span>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div>
			</div>
	