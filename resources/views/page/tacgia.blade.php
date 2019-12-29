@extends('include/master')
@section('title','Tác giả')
@section('content')

	<div class="col-md-10">         
        <form action="{{route('posttacgia')}}" method="POST">
        {{ csrf_field() }}  
        {{-- Sách --}}
        <table class="table">
               <tr align="center">

                  <th><h3>TÁC GIẢ</h3></th>                  
               </tr>

            <tr>
               
               <td>
                  Tên tác giả
                  <br>                 
                  <input type="text" class="form-control" placeholder="Tên tác giả" name="tentacgia" >
               </td>
               
            </tr>

            
             <tr>
                  <td>

                    <input type="submit" value="Thêm" id="bnt_submit">
                     
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
            </tr>   

          </table>
          @include('errors/errors')

         </form> 
        <h4 align="center">DANH SÁCH TÁC GIẢ</h4> 
         <div class="table-wrapper-scroll-y my-custom-scrollbar">
         <table class="table table-bordered table-striped mb-0" bgcolor="white">          
          <thead>
         	<tr>
         		<th>
         			Mã
         		</th>
         		<th>
         			Tên tác giả
         		</th>
         		<th align="center">
         			Thao tác
         		</th>
         	</tr>
         </thead>
          <tbody>
          @foreach($tacgia as $tg)
          <tr>
            <td align="center">
              {{$tg->MaTacGia}}
            </td>
            <td>
              {{$tg->TenTacGia}}
            </td>
           <td align='center'>
              <a onclick="return thongbao();" href="{{route('xoatacgia',[$tg->MaTacGia])}}"><span class='fa fa-trash'></span></a>&nbsp &nbsp<a href="{{route('capnhattacgia',[$tg->MaTacGia])}}"><span class='fa fa-edit'></span></a>
            </td>
          </tr>
          @endforeach
        </tbody>
         	
         </table>
       </div>
        
     </div>
@endsection