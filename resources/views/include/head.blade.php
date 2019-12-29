<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{URL::asset('source')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="source/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="source/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="source/bootstrap/images/logo1.png"/>
    <link rel="stylesheet" href="source/css/layout.css">
    <link rel="stylesheet" href="source/css/style.css">
    <script src="source/bootstrap/jquery.min.js"></script>
    <script src="source/bootstrap/popper.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.js"></script>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="source/css/sanpham.css">
    <link rel="stylesheet" href="source/css/style1.css">
    <link rel="stylesheet" href="source/css/countdown.css">
    <link rel="stylesheet" href="source/css/cloud.css">
    {{-- <script src="js/jquery.countdown.js"></script>
    <script src="js/jquery.countdown.min.js"></script> --}}
    <script>
     function thongbao() 
     {
       var conf=confirm("Bạn chắc chắn muốn xóa?")
       return conf;
     }    
    </script>
</head>