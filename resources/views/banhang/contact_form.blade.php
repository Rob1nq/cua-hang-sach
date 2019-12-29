<div class="row">
	<div class="col-md-6">		

        <form action="{{route('contact')}}" method="POST">
              {{ csrf_field() }}

            <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <h3><i class="fa fa-envelope fa-2x	">&nbsp;</i>Contact</h3>
                    </div>
                </div>
                <div class="card-body p-3">

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                    	       <div class="input-group-text"><i class="fa fa-user text-info"></i>
                                </div>
                       	    </div>
                            <input type="text" class="form-control" id="nombre" name="hoten" placeholder="Họ Tên" required>
                        </div>
              	     </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                       	    <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope text-info"></i>
                                </div>
                            </div>
                            <input type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-comment text-info"></i>
                                </div>
                            </div>
                            <textarea class="form-control" placeholder="Nhập nội dung" name="noidung" required></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Gởi" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                    </div>

                </div>
            </form>

	    </div>
	<div class="col-md-6">

        <div class="card border-primary rounded-0">
                <div class="card-header p-0">
                    <div class="bg-info text-white text-center py-2">
                        <h3><i class="fa fa-envelope fa-2x  ">&nbsp;</i>Thông tin liên hệ</h3>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="space20">&nbsp;</div>

                        <a href=""><i class="fa fa-facebook-square fa-2x">&nbsp;Facebook</i></a><br>
                    <div class="space20">&nbsp;</div>

                        <a href=""><i class="fa fa-twitter-square fa-2x">&nbsp;Twitter</i></a> <br>
                    <div class="space20">&nbsp;</div>

                        <a href=""><i class="fa fa-envelope fa-2x">&nbsp;Maill</i></a> <br>
                    <div class="space20">&nbsp;</div>

                        <a href=""><i class="fa fa-phone-square fa-2x">&nbsp;0123456789</i></a>
                          
                    <h6 class="contact-title" align="left">Địa chỉ liên hệ</h6>
                        <p align="left">
                            Trường ĐH Công nghệ thông tin-ĐHQG HCM <br>
                            Khu Phố 6, phường Linh Trung, quận Thủ Đức,TP HCM
                        </p>
                </div>

            </div>
        {{--  --}}
	
					
</div>
