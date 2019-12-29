@extends('include/layouts')
@section('title','Thanh toán')
@section('noidung')
	<div class="row">

      	<div class="col-md-12">
      	<div class="space30">&nbsp;</div>
            <h3 align="center">Thông tin đơn hàng</h3>
      	
      	</div>
      	<div class="col-md-12"> 
      				<div class="space30">&nbsp;</div>
 

      	  <table class="table navbar-light bg-light">

      	  	<tr>
      	  		<th colspan="2" style="text-align: center">
      	  			Thông tin địa chỉ giao hàng
      	  		</th>

      	  	</tr>
      	  	<tr>
      	  		<td>
      	  			Tên khách hàng
      	  		</td>
      	  		<td>
      	  		{{$thanhtoan->HoTenKH}}
      	  		</td>
      	  	</tr>
      	  	<tr>
      	  		<td>
      	  			Số điện thoại
      	  		</td>
      	  		<td>
                        {{$thanhtoan->DienThoai}}
      	  			
      	  		</td>
                        
      	  	</tr>
      	  	<tr>
      	  		<td>
      	  			Địa chỉ
      	  		</td>
      	  		<td>
      	  		{{$thanhtoan->DiaChi}}
      	  		</td>
      	  	</tr>


      	  	
      	  </table>	    	
      
	      <table class="table  navbar-light bg-light">

	      	<tr>
	      		<th colspan="4" style="text-align: center">

	      			Thông tin hóa đơn
	      			
	      		</th>
	      	</tr>
                  
	      	<tr>
	      		<th>
	      			Sản phẩm
	      		</th>
	      		<th>
	      			Số Lượng
	      		</th>
	      		<th>
	      			Giá
	      		</th>
                        <th>
                              Thành tiền 
                        </th>


	      	</tr>
                  @foreach($content as $value)
                  <tr>
                        <td>
                              {{$value->name}}
                        </td>
                        <td>
                              {{$value->qty}}
                        </td>
                        <td>
                              {{$value->price}} vnđ
                        </td>
                        <td>
                              {{$value->qty*$value->price}} vnđ
                        </td>
                  </tr>
                  @endforeach
	      	<tr>
	      		<td colspan="4">
	      			Tổng tiền: <span>{{$subtotal}} vnđ,</span>&nbsp;
                              Phí :<span>{{$tax}} vnđ,</span> &nbsp; Số tiền cần thanh toán: <span>{{$total}} vnđ</span>


	      		</td>
	      	</tr>
	      	<tr>
	      		<td colspan="4" style="text-align:center">
	      			<a  class="beta-btn primary" href="{{route('dathang')}}"  id="click">Đặt hàng<i class="fa fa-chevron-right"></i></a>
                              <script>
                                    $(document).ready(function() {
                                        $('#click').click(function() {
                                          alert('Đặt hàng thành công')
                                         });
                                  });
                              </script>

	      		</td>
	      	</tr>
		

	      	
	      </table>

	  	</div>
	</div>
@endsection