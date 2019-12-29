@extends('include/master')
@section('title','Thể loại')
@section('content')

	<div class="col-md-10">         
        <form action="{{route('posttheloai')}}" method="POST">
        {{ csrf_field() }}  
        {{-- Sách --}}
        <table class="table">
            <thead>
               <tr align="center">

                  <th><h3>THỂ LOẠI</h3></th>                  
               </tr>
            </thead>

            <tr>
               
               <td>
                  Tên thể loại
                  <br>                 
                  <input type="text" class="form-control" placeholder="Tên thể loại" name="tentheloai" >
               </td>
               
            </tr>

            
             <tr>
                  <td>

                    <input type="submit" value="Thêm" id="bnt_submit">
                     
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
            </tr>   

          </table>

         </form>  
         @include('errors/errors')
        <h4 align="center">DANH SÁCH THỂ LOẠI</h4>
        <div class="table-wrapper-scroll-y my-custom-scrollbar">
         <table class="table table-bordered table-striped mb-0" bgcolor="white">          
          
         	<tr>
         		<th>
         			STT
         		</th>
         		<th>
         			Tên thể loại
         		</th>
         		<th align="center">
         			Thao tác
         		</th>
         	</tr>
          @foreach($theloai as $tl)

          <tr>
            <td align="center">
              {{$tl->MaTheLoai}}
            </td>
            <td>
              {{$tl->TenTheLoai}}
            </td>
           <td align='center'>
              <a onclick="return thongbao();" href="{{route('xoatheloai',[$tl->MaTheLoai])}}"><span class='fa fa-trash'></span></a>&nbsp &nbsp<a href="{{route('capnhattheloai',[$tl->MaTheLoai])}}"><span class='fa fa-edit'></span></a>
            </td>
            
          </tr>
         	@endforeach
         </table>
       </div>
        
     </div>
@endsection