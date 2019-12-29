@extends('include/master')
@section('title','QL Sách')
@section('content')
<script>
     function thongbao() 
     {
       var conf=confirm("Bạn chắc chắn muốn xóa Sản phẩm này?")
       return conf;
     }
    
</script>
<div class="col-md-10">         
        <form action="{{ route('sach')}}" method="POST">
        {{ csrf_field() }}  
        {{-- Sách --}}
        <table class="table">
            <thead>
               <tr align="center">

                  <th colspan="2"><h3>THÔNG TIN NHẬP SÁCH</h3></th>                  
               </tr>
            </thead>
            <tr>
              <td>
                Nhà xuất bản
                <select name="manhaxuaban" id="" class="form-control">
                  @foreach($nhaxuatban as $nxb)
                  <option value="{{$nxb->MaNXB}}">{{$nxb->TenNXB}}</option>
                  @endforeach

                </select>
              </td>
              <td>
                Tên Đầu sách
                <select name="madausach" id="" class="form-control">
                  @foreach($dausach as $ds)
                  <option value="{{$ds->MaDauSach}}">{{$ds->TenDauSach}}</option>
                  @endforeach
                 

                </select>
              </td> 
            </tr>

            
            <tr>
              <td>
                Số lượng tồn <br>
                <input type="text" class="form-control" name="soluongton" required value="1" >
              </td>
              <td>
                Đơn giá <br>
                <input type="text" required class="form-control" id="dongia" name="dongia" >
              </td>
            </tr>  
            <tr>
              <td>
                Năm XB
                <input type="text" class="form-control" name="namxb" required placeholder="Năm XB">
              </td>
           
              <td>
                Giá khuyến mãi
                <input type="text" class="form-control" name="dongiakhuyenmai" id="dongiakhuyenmai" required onchange ="Thongbao()">
                <script>
                  function Thongbao(){
                    var dongia= $('#dongia').val();
                    var dongiasale=$('#dongiakhuyenmai').val();
                    if (dongia<dongiasale) alert('Giá khuyến mãi phải nhỏ hơn giá bán?');

                  }
                </script>
              </td>
            </tr>
            <tr>
              <td>
                    Ảnh mô tả <br>
                    <input type="file" name="anh" required>                    
              </td>
              <td>
                  Ngày ra mắt:
                  <input type="date" class="form-control" name="ngayramat" required>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                Thêm mô tả
                <textarea name="mota" id="mota" cols="50" rows="5" class="form-control"></textarea>
              </td>
            </tr>

             <tr>
                  <td colspan="2">

                    <input type="submit" value="Thêm" id="bnt_submit">
                     
                    <input type="reset" value="Hủy" id="bnt_reset">

                    
                  </td>
                </tr>   

          </table>

         </form>  
        
     </div>

     @endsection 