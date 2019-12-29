  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
         <nav class="navbar navbar-light bg-light">    
          <a class="navbar-brand " href="{{route('trangchu')}}">
            <i class="fa fa-windows"></i>

            <span>ADMINISTRATOR</span>
 
          </a>
        </nav>
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        

        <ul class="navbar-nav mr-auto" >        
            
        </ul>     
        

        <ul class="nav justify-content-end">

          <li class="nav-item">
                <a class="nav-link" href="{{route('homepage')}}"><i class="fa fa-arrow-left"></i>Vào Web</a>
          </li>                  

          <div class="fa fa-user" style="">

           <div class="btn-group">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>              
              <ul class="dropdown-menu navbar-light" role="menu">
                <li><a href="{{route('getUser')}} " class="fa fa-user">&nbsp;{{Auth::user()->name}}</a></li>
                <li><a href="{{route('AdminThongBao')}} " class="fa fa-bell">&nbsp;Thông báo</a></li>
                <li><a href="{{route('getLogout')}}" class="fa fa-power-off">&nbsp;Đăng xuất</a></li>             
              </ul>
            </div>
          </div>
      </ul>        
    </div>      
  </nav>  
</div>