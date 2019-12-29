@extends('include/master')
@section('title','User')
@section('content')
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
	<div class="col-md-10">
    <br>
       <h3 align="center">Thông tin người dùng</h3>       
        <div class="table-wrapper-scroll-y my-custom-scrollbar"> 
         <table class="table table-bordered table-striped mb-0 " bgcolor="white">       
            
            <tr>
                <th>Id</th>
                <th>
                    Tên đăng nhập
                </th>
                <th>
                    Email
                </th>
                <th >
                    Level
                </th>
                <th align="center">
                    Tác vụ 
                </th>
            </tr>
            @foreach($user as $value)

            <tr>
                <td>
                    {{$value->id}}
                </td>
                <td>
                    {{$value->name}}
                </td>
                <td>
                    {{$value->email}}
                </td>
                <td>
                    @if($value->level==1) Admin
                    @elseif($value->level==0) User
                    @endif
                </td>

                <td align='center'><a onclick="thongbao()" href='{{route('getDelete',[$value->id])}}'><span class='fa fa-trash'></span></a>&nbsp &nbsp<a href='{{route('getUpdate',[$value->id])}}'><span class='fa fa-edit'></span></a>
            </tr>
            
            @endforeach
            @if (session('success'))
            <div class="alert alert-success">
                  <p>{{ session('success') }}</p>
            </div>
            @endif
            @if (session('danger'))
            <div class="alert alert-danger">
                  <p>{{ session('danger') }}</p>
            </div>
            @endif

        </table>   
        </div>     
     </div>
@endsection