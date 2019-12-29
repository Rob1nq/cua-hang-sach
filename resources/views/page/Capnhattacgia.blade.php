

@extends('include/master')

@section('title','Cập nhật Tác giả')
@section('content')
    <div class="col-md-10">         
            <form action="{{ route('postcapnhattacgia')}}" method="POST">
            {{ csrf_field() }} 
             <table class="table">
              <thead>

               <tr align="center">

                  <th><h3>CẬP NHẬT</h3></th>                  
               </tr>
            </thead>

            <tr>
               <td>
                  Tên tác giả
                  <br>
                  @foreach($tacgia as $tg)
                  <input type="text" style="display: none" name="matacgia" value="{{$tg->MaTacGia}}">
                  <input type="text" class="form-control" placeholder="Tên NXB" name="tentacgia"  value="{{$tg->TenTacGia}}" required>
                  @endforeach

               </td>

               
            </tr>
            
             <tr>
                  <td>
                    <input type="submit" value="Cập nhật" id="bnt_submit">
                     
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
            </tr>   

          </table>
          @include('errors/errors')

         </form> 
            
             
         </div>
@endsection