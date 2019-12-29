<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{asset('source')}}">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="source/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="source/font-awesome/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="source/bootstrap/images/logo1.png"/>
    <link rel="stylesheet" href="source/css/layout.css">
    <link rel="stylesheet" href="source/css/style.css">
    <script src="source/bootstrap/jquery.min.js"></script>
    <script src="source/bootstrap/popper.min.js"></script>
    <script src="source/bootstrap/js/bootstrap.js"></script>    
    <title>@yield('title')</title>
    <script>
     function thongbao() 
     {
       var conf=confirm("Bạn chắc chắn muốn xóa?")
       return conf;
     }

    
    </script>
    <style>
        

    .container {
      display: flex;
      flex-direction: column;
      height: 100vh ;
    }

    header {
      height: 50px;
      flex-shrink: 0;
    }

    footer {
      height: 50px;
      flex-shrink: 0;
      position: flex !important; 
      bottom: 0 !important;

    }


    


    </style>

</head>