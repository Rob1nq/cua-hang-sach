@extends('include/master')
@section('title','Báo cáo số lượng bán')
@section('content')
<div class="col-md-10">
    <style>
  .my-custom-scrollbar {
  position: relative;
  height: 450px !important;
  overflow: auto;
    }
  .table-wrapper-scroll-y {
  display: block;
    }
</style>
    <br>
    <h3 align="center">THỐNG KÊ SỐ LƯỢNG BÁN</h3>
    	<div class="table-wrapper-scroll-y my-custom-scrollbar">
 
        <table class="table table-bordered table-striped mb-0 " bgcolor="white">
    		
    		<tr align="center">
    			<td colspan="5">    				
    				<div class="row">   
                    <div class="col-md-4"></div>
                    <div class="col-md-4">  
                        {{-- <form action="{{route('baocaoton')}}" method="GET"> --}}
                            {{ csrf_field()}}
                            <div class="input-group">                               

                              <select class="custom-select" name="thang" id="thang" aria-label="Example select with button addon">
                              @for($i=1; $i<13; $i++)
                                <option  style="text-align: left" value="{{$i}}">Tháng {{$i}}</option>
                              @endfor

                            </select>
                            <div class="input-group-append">
                             
                              <button class="fa fa-search" type="button" id="btnchon"style="background-color: none;"></button>
                            </div>
                        {{-- </form> --}}
                        <script>
                            $(document).ready(function() {
                                $('#btnchon').click(function() {
                                 
                                var token=$('input[name=_token]').val();
                                var month=$('#thang option:selected').val();
                                alert(month);

                                
                                 
                                  $.ajax({
                                  url:'{{route('post_BaoCaosoluongban')}}',
                                  type:'POST',
                                  cache:false,
                                  data:{"_token":token,"month":month},
                                  success: function(data){
                                      alert('Vui lòng đợi !!!!');
                                      $('#kq').html(data);
                                  }
                                 })

                                  
                                }); 
                                
                              });
                        </script>
                    </div>
                    </div>
                <div class="col-md-4"></div>
                </div>          
        				
        		</td>
        			
    		</tr>
    		<tr>
    			<th>Mã Sách</th>
    			<th>Tên sách</th>
    			<th>Số lượng bán</th>
    		</tr>
            {{-- @foreach($sach as $s) --}}
    		<tbody id="kq">
                  
            </tbody>
            {{-- @endforeach --}}
    		
    	</table>
    </div>

</div>
@endsection
