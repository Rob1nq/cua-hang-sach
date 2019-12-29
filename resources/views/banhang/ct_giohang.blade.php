      <div class="row">
        <div class="col-md-9">
             @if (session('success'))
              <div class="alert alert-danger">
                    <p>{{ session('success') }}</p>
              </div>
              @endif
              
          <div class="table-wrapper-scroll-y my-custom-scrollbar"> 
          <table class="table table-bordered table-striped mb-0 navbar-light bg-white" bgcolor="white">    
          

            <tr>
              <td colspan="7"><h3 align="center">Giỏ hàng </h3></td>


            </tr>
            <tr>
             
                @if($count ==0)
               <td>
              <div class="alert alert-danger" role="alert">
                (Trống)
              </div>
               </td>

            @endif
             
            </tr>

            
            @if($count!=0)
            <tr align="center">
              <td>
                STT
              </td>
              <td>

                  Sản phẩm
                
              </td>
              <td>
                Tên
              </td>
              <td>
                Số lượng
              </td>
              <td>
                Đơn giá
              </td>
              <td>
                Tổng
              </td>
              <td>
                Thao tác
              </td>
            </tr>

            <p style="display: none">{{$i=1}}</p>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">  

            @foreach($content as $value)

            <tr>
              <td>{{$i++}}</td>
              <td>
                <img src="source/bootstrap/images/{{$value->options->imgs}}" alt="" width="80" height="80">
                
              </td>
              <td>
                {{$value->name}}
              </td>
              <td >
                <input type="number" class="form-control" id="qty" min=1 value="{{$value->qty}}" max="99999" step="1" value="1" style="width: 70px" autocomplete="off" >
              </td>
              <td>
                {{$value->price}}
              </td>
              <td>
                {{($value->price)*($value->qty)}}
              </td>
              <td >
                <a onclick="return thongbao();" href="{{route('xoagiohang',[$value->rowId])}}" class="fa fa-trash fa-2x" id="xoa"></a>&nbsp;&nbsp;
                <button class="fa fa-refresh fa-2x" id="{{$value->rowId}}" style="border:none;background:none"></button>
                
              </td>
            </tr>   
            @endforeach             
            
            <script>
              

              $(document).ready(function() {
                $('.fa.fa-refresh.fa-2x').click(function() {
                 var rowId=$(this).attr('id');
                 var qty=$(this).parent().parent().find('#qty').val();
                var token=$('input[name=_token]').val();
                
                 
                  $.ajax({
                  url:'{{route('capnhatgiohang')}}',
                  type:'POST',
                  cache:false,
                  data:{"_token":token,"id":rowId,"qty":qty},
                  success: function(data){
                      if (data=='oke'){
                        window.location.href="{{route('giohang')}}";
                        alert('Cập nhật thành công !');
                      } 
                      else
                        alert('Cập nhật không thành công !');
                  }
                 })
                });
                
              });
            </script>
            
             
            <tr>
              <td colspan="7" style="text-align: center">
                  <a class="beta-btn primary"  href="{{route('shop')}}">Tiếp tục xem sản phấm<i class="fa fa-chevron-right"></i></a>

                                
                <div class="clearfix"></div>
              </td>
            </tr>
          @endif
        </table>
        @if (session('danger'))
              <div class="alert alert-danger">
                    <p>{{ session('danger') }}</p>
              </div>
              @endif
      </div>


        </div>

        <div class="col-md-3">

          <table class="table navbar-light bg-light ">
            <tr bgcolor="white">
              <th colspan="2" style="text-align:center">
                Tổng số lượng
              </th>
            </tr>
            <tr>
              <td>
                Tổng phụ
              </td>
              <td>
                {{$subtotal}}
              </td>
            </tr>
            <tr>
              <td>
                Giao hàng
              </td>
              <td>
                {{$tax}}
              </td>
            </tr>
            <tr>
              <td>
                Tổng tiền
                
              </td>
              <td>
                {{$total}} vnđ
              </td>
            </tr>
            <tr>
              <td colspan="3">

                <a class="beta-btn primary" href="{{route('thanhtoan')}}">Tiến hành đặt hàng<i class="fa fa-chevron-right"></i></a>
                
              </td>
            </tr>
            
          </table>


          
        </div>


  

      </div>
