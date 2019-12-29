@extends('include/master')
@section('title','Tìm kiếm')
@section('content')
	<div class="col-md-10">
      <form action="#" method="post"></form>      
      <table class="table">
        <tr>          
              <td colspan="2" align="center">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nhập nội dung tìm kiếm ..." style="border-radius: 10px" >
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" id="search" style="margin-left: 10px; margin-top: -0px; border-radius: 10px"><i class="fa fa-search"></i></button>
                </div>
              </div>
              
            </td>
            
        </tr>
      </table>     

    </div>
@endsection