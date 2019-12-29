@extends('include/master')
@section('title','Nhà xuất bản')
@section('content')

	<div class="col-md-10">         
        <form action="{{route('nxb')}}" method="POST">
        {{ csrf_field() }}  
        
        {{-- Sách --}}
        <table class="table">
            <thead>
               <tr align="center">

                  <th><h3>NHÀ XUẤT BẢN</h3></th>                  
               </tr>
            </thead>

            <tr>
               
               <td>
                  Tên nhà xuất bản
                  <br>                 
                  <input type="text" class="form-control" placeholder="Tên NXB" name="tennhaxuatban" >
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
          <th  colspan="3"><h4 align="center">DANH SÁCH NHÀ XUẤT BẢN</h4></th>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
 
         <table class="table table-bordered table-striped mb-0 " bgcolor="white">
         <thead>        

         	<tr>
         		<th>
         			STT
         		</th>
         		<th>
         			Tên NXB
         		</th>
         		<th align="center">
         			Thao tác
         		</th>
         	</tr>
         </thead>
          <tbody>
          @foreach($nxb as $NXB)
          <tr>
            <td align="center">
              {{$NXB->MaNXB}}
            </td>
            <td>
              {{$NXB->TenNXB}}
            </td>
            <td align='center'>
              <a onclick="return thongbao();" href="{{route('xoanxb',[$NXB->MaNXB])}}"><span class='fa fa-trash'></span></a>&nbsp &nbsp<a href="{{route('capnhatnxb',[$NXB->MaNXB])}}"><span class='fa fa-edit'></span></a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
         	
         </table>
       </div>
        
     </div>
@endsection