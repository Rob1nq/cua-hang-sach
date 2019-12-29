 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white">Đăng nhập</h5>

                <button type="button" style="color: white" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="{{route('postAdminLoginShop')}}" method="POST" class="form-group">
              {{ csrf_field() }}

              <div class="modal-body">
                    <div class="form-group">
                      Tên đăng nhập <br>  
                        <div class="input-group mb-2">

                            <div class="input-group-prepend">
                             <div class="input-group-text"><i class="fa fa-user text-info"></i>
                                </div>
                            </div>

                            <input type="text" class="form-control" name="UserName" placeholder="Tên đăng nhập" required>
                        </div>
                    </div>

                    <div class="form-group">
                            Mật khẩu <br>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fa fa-lock text-info"></i>
                                    </div>
                                </div>
                                <input type="password" class="form-control" name="PassWord" placeholder="Mật khẩu" required>
                            </div>
                    </div>
                  
              </div>
              <div class="modal-footer">
                <button class="btn btn-success"  style=" color: white"  type="submit">Đăng nhập</button>
                <button  class="btn btn-success" type="button" ><a  style=" color: white" href="{{route('Signup')}}">Đăng kí</a></button>

              </div>
            </form>

            </div>
          </div>
  </div>
  
         
      