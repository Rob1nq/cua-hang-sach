
<div class="space70 ">&nbsp;</div>



  <footer  style="background-color: #e0e0d1">
  <div class="space20">&nbsp;</div>


  <div class="row">

    <div class="col-md-4">

      <h6 align="center">Kết nối với chúng tôi</h6>
      <div class="space20">&nbsp;</div>

      <p align="center">      
      <a href="https://www.facebook.com/levannhat21"><img src="source/images/fb.svg" alt="" width="40"></a>
      <a href="https://mail.google.com/"><img src="source/images/logo_gmail_lockup_dark_1x.png" alt="" width="70"></a>
       <img src="source/images/phone-1439840_960_720.png" alt="" width="32">
    </p>
    </div>
    <div class="col-md-4">

      <h6 align="center">Phương thức thanh toán </h6>
      <div class="space20">&nbsp;</div>

      <p align="center"><img src="source/images/visa.svg" width="60">
        <img src="source/images/internet-banking.svg" width="60">
        <img src="source/images/cash.svg" width="60">
          
      </p>
      <p align="center">
        <img src="source/images/Vi-MoMo-new.jpg" width="50">&nbsp;
        <img src="source/images/installment.svg" width="60">&nbsp;
        <img src="source/images/1280px-PayPal_logo.svg.png?fbclid=IwAR38XKSUCtWMHLZwyp_G3N2xabV64MbVxqV8dSgJXrc5YsFZ_MjzMl9H36k" width="45">
      </p>
      
    </div>
    <div class="col-md-4">
      <h6 align="center">Vui lòng nhập Email để nhận thông tin mới nhất</h6>
      <div class="space20">&nbsp;</div>

      <form action="{{route('dangkithongtin')}}" method="POST">
                      {{ csrf_field() }}

       <p><input type="text" class="form-control" style="width:70%; float: left; " name="email" placeholder="Địa chỉ mail của bạn ...">
        <input type="submit" value="Đăng kí" style="margin-left: 10px; border-radius: 5px"></p>
      </form>
      
      
    </div>
    
  </div>
</footer>
