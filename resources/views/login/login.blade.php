
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
    <link rel="stylesheet" href="source/css/cloud.css">    
    <title>Đăng nhập</title>

</head>
<body style="background-color: #C7DFDE">
  
  

  <div class="container">
     <div id="clouds">
    <div class="cloud x1"></div>
    <div class="cloud x1_5"></div>
    <div class="cloud x2"></div>
    <div class="cloud x3"></div>
    <div class="cloud x4"></div>
    <div class="cloud x5"></div>
  </div>

    <div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
           
            <div class="form-group" align="center">
				<img src="source/bootstrap/images/logo1.png" width="120" height="120" alt="">
			</div>
              @if (session('danger'))
                <div class="alert alert-danger">
                    <p>{{ session('danger') }}</p>
                </div>
              @endif
              @if (session('error'))
                <div class="alert alert-danger">
                    <p>{{ session('error') }}</p>
                </div>
              @endif
            <form class="form-signin" action="{{route('postAdminLogin')}}" method="post">
              {{ csrf_field() }}

              <div class="form-label-group">
                <input type="text" name="UserName" id="Username" class="form-control" placeholder="User name" required autofocus value="">
                <label for="Username">Tên Đăng Nhập</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="PassWord" id="Password" class="form-control" placeholder="Password" required value="">
                <label for="Password">Mật Khẩu</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
                
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</body>
</html>