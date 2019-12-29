
@extends('include/master')
@section('title','Cập nhật thể loại')
@section('content')

	<div class="col-md-10">         
        <form action="{{route('postcapnhattheloai')}}" method="POST">
        {{ csrf_field() }}  
        {{-- Sách --}}
        <table class="table">
            <thead>
               <tr align="center">

                  <th><h3>CẬP NHẬT</h3></th>                  
               </tr>
            </thead>

            <tr>
               @foreach($theloai as $tl)
               <td>
                  Tên thể loại
                  <br>   
                  <input type="text" style="display: none" name="matheloai" value="{{$tl->MaTheLoai}}">
              
                  <input type="text" class="form-control" placeholder="Tên thể loại" name="tentheloai" value="{{$tl->TenTheLoai}}">
               </td>
               @endforeach
               
            </tr>

            
             <tr>
                  <td>

                    <input type="submit" value="Cập nhât" id="bnt_submit">
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
            </tr>   

          </table>

         </form>  
         @include('errors/errors')
         
        
     </div>
@endsection