@extends('include/master')
@section('title','Đầu sách')
@section('content')
	<div class="col-md-10">         
        <form action="{{route('post_dausach')}}" method="POST">
        {{ csrf_field() }}  
        {{-- Sách --}}
        <table class="table">
            <thead>
               <tr align="center">

                  <th colspan="2"><h3>ĐẦU SÁCH</h3></th>                  
               </tr>
            </thead>

            <tr>
               
               
              	<td>
                Thể loại
                <select name="matheloai" class="form-control" id="matheloai" >
                  @foreach($theloai as $tl)
                   <option value="{{$tl->MaTheLoai}}">{{$tl->TenTheLoai}}</option>
                  @endforeach
                </select>
              </td>
              <td>
                
                  Tên đầu sách
                  <br>                 
                  <input type="text" class="form-control" placeholder="Tên đầu sách" name="tendausach">
               </td> 
              
              
            </tr>
            <tr>
              <td>
                Tác giả
                  <div class="input-group">

                      <select class="custom-select" name="matacgia" id="matacgia" aria-label="Example select with button addon">
                      @foreach($tacgia as $tg)
                        <option style="text-align: left" value="{{$tg->MaTacGia}}">{{$tg->TenTacGia}}</option>
                      @endforeach

                    </select>
                    <div class="input-group-append">
                      <input type="button" class="form-control-btn"  value="Chọn" onclick="Getgiatri()" style="text-align: center; margin-left: 10px">
                    </div>
                  </div>
                  <input type="text" name="dsmatacgia" id="dsmatacgia" autocomplete="off" style="display: none">
              </td>
                                
                <td>
                  Danh sách các tác giả:
                  <br>

                    <textarea name="danhsachtacgia"  class="form-control" rows="2" id="danhsach" autocomplete="off"></textarea>
                    
                </td>
                <script>
                    function Getgiatri(){

                      var Tentacgia=$('#matacgia option:selected').text();
                      var Matacgia=$('#matacgia').val();
                      //console.log(Tentacgia);
                      var danhsachma=$('#dsmatacgia').val();
                      danhsachma=danhsachma+Matacgia;
                      $('#dsmatacgia').val(danhsachma+' ');
                    
                      var Danhsach=$('#danhsach').val();
                      Danhsach=Danhsach+Tentacgia;
                      var a=Danhsach.split(';');
                  
                      var tmp = [];
                      $.each(a, function(i, el){
                        if($.inArray(el, tmp) === -1) 
                          {
                            tmp.push(el); 
                            
                            console.log(tmp);
                          }
                    });
                      var hienthi=$('#danhsach').val(Danhsach+';');

                   }


                </script>
                    


               
            </tr>

            
             <tr>
                  <td colspan="2">

                    <input type="submit" value="Thêm" id="bnt_submit">
                     
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
            </tr>   

          </table>
          @include('errors/errors')

         </form>  
         <h4 align="center">DANH SÁCH ĐẦU SÁCH</h4>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
         <table class="table table-bordered table-striped mb-0" bgcolor="white">          

         	<tr>
         		<th align="center">
         			Mã
         		</th>
            <th>
              Tên đầu sách
            </th>
            <th>
              Thể loại
            </th>
         		<th>
         			Tác giả
         		</th>
         		<th align="center">
         			Thao tác
         		</th>
         	</tr>
          @foreach($dausach as $ds )
          <tr>
            <td>
              {{$ds->MaDauSach}}
            </td>
            <td>
              {{$ds->TenDauSach}}
            </td>
            <td>
              {{$ds->TenTheLoai}}
            </td>
            <td>
              {{$ds->TenTacGia}}
            </td>
            <td align='center'>
              <a onclick="return thongbao();" href="{{route('xoadausach',[$ds->MaDauSach])}}"><span class='fa fa-trash'></span></a>&nbsp &nbsp<a href="{{route('getcapnhatdausach',[$ds->MaDauSach])}}"><span class='fa fa-edit'></span></a>
            </td>
          </tr>
          @endforeach
         	
         </table>
       </div>
        
     </div>
@endsection