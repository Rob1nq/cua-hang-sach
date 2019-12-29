
@extends('include/master')
@section('title','Cập nhật NXB')
@section('content')

    <div class="col-md-10">         
            <form action="{{ route('CapNhatNXB')}}" method="POST">
            {{ csrf_field() }} 
             <table class="table">
              <thead>

               <tr align="center">

                  <th><h3>CẬP NHẬT THÔNG TIN</h3></th>                  
               </tr>
            </thead>

            <tr>
              @foreach($nxb as $NXB)
               <td>
                  Tên nhà xuất bản
                  <br>
                  <input type="text" style="display: none" name="manxb" value="{{$NXB->MaNXB}}">
                  <input type="text" class="form-control" placeholder="Tên NXB" name="tennhaxuatban"  value="{{$NXB->TenNXB}}" required>

               </td>
               @endforeach

               
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