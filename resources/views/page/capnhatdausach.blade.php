

@extends('include/master')
@section('title','Đầu sách')
@section('content')
	<div class="col-md-10">         
        <form action="{{route('postcapnhatdausach')}}" method="POST">
        {{ csrf_field() }}  
        {{-- Sách --}}
        <table class="table">
            <thead>
               <tr align="center">

                  <th colspan="2"><h3>Đầu sách</h3></th>                  
               </tr>
            </thead>

            <tr>
               
               
              	<td>
                Thể loại
                <select name="matheloai" class="form-control" id="matheloai" >
                   @foreach ($selected as $value)
                   
                      <option value="{{$value->MaTheLoai}}" selected>{{$value->TenTheLoai}}</option>

                    @endforeach

                  @foreach($theloai as $tl)
                   <option value="{{$tl->MaTheLoai}}">{{$tl->TenTheLoai}}</option>
                  @endforeach
                </select>
              </td>
              <td>
                <input type="text" name="MaDauSach" value="{{$id}}" style="display: none">
                  Tên đầu sách
                  <br> 
                  @foreach($dausach as $ds)                
                  <input type="text" class="form-control" placeholder="Tên đầu sách" name="tendausach" value="{{$ds->TenDauSach}}" required>
                  @endforeach
               </td> 
              
              
            </tr>
            <tr>
              <td>
                Tác giả
                  <div class="input-group">

                      <select class="custom-select" name="matacgia" id="matacgia" disabled >
                      @foreach($tacgia as $tg)
                        <option style="text-align: left" value="{{$tg->MaTacGia}}">{{$tg->TenTacGia}}</option>
                      @endforeach

                    </select>
                    <div class="input-group-append">
                      <input type="button" class="form-control-btn"   value="Chọn" onclick="Getgiatri()" style="text-align: center; margin-left: 10px">
                    </div>
                  </div>
                                         
                  <input type="text" name="dsmatacgia" id="dsmatacgia" autocomplete="off" value="{{$matacgia}}" style="display: none">



              </td>
                                
                <td>
                  Danh sách các tác giả:
                  <br>

                    <textarea name="danhsachtacgia"  value="" class="form-control" rows="2" id="danhsach" disabled autocomplete="off">{{$tentacgia}}</textarea>
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

                    <input type="submit" value="Cập nhật" id="bnt_submit">
                     
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
            </tr>   

          </table>

         </form>  
         
     </div>
@endsection