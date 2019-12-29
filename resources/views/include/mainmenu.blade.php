
<div class="header sticky-top">
    <style>
      #nav-link_ {
        display: block;
        padding: -0.3rem 1rem 1rem !important;     
           
      }
      .dropdown-item{
        padding-top: 0px !important;

      }
    </style>

      

      @if(Auth::check()==false && Auth::guard('member')->check()==false )
      <ul class="nav justify-content-end navbar-light bg-light" id="main-menu">
        
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="/" id="nav-link" ><i class="fa fa-sign-in fa-2x"></i>Đăng kí/Đăng nhập</a>
          </li>         
      </ul>   
      @endif 
      @if(Auth::guard('member')->check()==true)
      <ul class="nav justify-content-end navbar-light bg-light" id="main-menu">
          <li class="nav-item dropdown">
                <a class="nav-link" {{-- href="#" --}} id="nav-link" id="navbarDropdown" >
                 <i class="fa fa-user fa-2x" ></i>{{Auth::guard('member')->user()->name}}
                </a>
                <div class="dropdown-content navbar-dark bg-light">
                  <a class="dropdown-item" href="{{route('taikhoan')}}"  id="nav-link">&nbsp;&nbsp;&nbsp;<i class="fa fa-cog"></i>Cập nhật</a>
                  <a class="dropdown-item" href="{{route('getThongBao')}}" id="nav-link">&nbsp;&nbsp;&nbsp;<i class="fa fa-bell"></i>Thông báo</a>
                  <a class="dropdown-item" href="{{route('donhang')}}" id="nav-link">&nbsp;&nbsp;&nbsp;<i class="fa fa-file-text-o"></i>Đơn hàng</a>
                </div>         
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="{{route('LogoutShop')}}" id="nav-link" ><i class="fa fa-sign-in fa-2x"></i>Đăng xuất</a>
          </li>         
      </ul>   
      @endif 
      @if(Auth::check()==true)
      <ul class="nav justify-content-end navbar-light bg-light" id="main-menu">
          <li class="nav-item dropdown">
                <a class="nav-link"  id="nav-link" href="{{route('trangchu')}}" id="navbarDropdown" >
                 <i class="fa fa-user fa-2x" ></i>{{Auth::user()->name}}
                </a>

                 
          </li>   
          <li class="nav-item">
            <a class="nav-link"  href="{{route('LogoutShop')}}" id="nav-link" ><i class="fa fa-sign-in fa-2x"></i>Đăng xuất</a>
          </li>         
      </ul>   
      @endif 
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainmenu">
            <a class="navbar-brand" href="{{route('homepage')}}">
              <nav class="navbar navbar-dark bg-light">    
                <a class="navbar-brand " href="{{route('homepage')}}">
                  <img src="source/bootstrap/images/logo1.png" width="150" height="90" alt="">

                </a>
              </nav>
              {{-- <span>BOOKTEAM </span> --}}

            </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav mr-auto" >        
              
                <li class="nav-item">
                  <a class="nav-link" href="{{route('homepage')}}"><i class="fa fa-home fa-2x"></i>Trang Chủ</a>
                </li>
              
                <li class="nav-item ">
                  <a class="nav-link" href="{{route('shop')}}"><i class="fa fa-book fa-2x"></i>Sách</a>
                      
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="{{route('lienhe')}}"><i class="fa fa-phone fa-2x"></i>Liên Hệ</a>
                </li>
                <li class="nav-item">
                  
                      <ul> 
                        <li class="dropdown" style="margin-left:30px; padding-right: 30px;margin-top: -10px;"> 
                           <a href="{{route('giohang')}}" class="nav-link" data-toggle="dropdown" role="menu" >        
                                <a href="{{route('giohang')}}">
                                <div class="fa fa-shopping-cart fa-2x" id="shopping">
                                </div>
                                <span class="badge" ><sup id="sl" style="font-size:100%; padding-bottom: -10px;background-color: red; border-radius: 15px">{{$count}}</sup></span> 
                              </a>

                           </a>
                    
                        </li>
                      </ul>
                    </a>
                    
                     
                  </li>
                <li class="nav-item">                
                  <form role="search" method="GET" id="searchform" action="{{route('timkiemsach')}}">

                      <input type="text" name="search" id="s" placeholder="Nhập từ khóa..." style="border-radius: 10px" />
                      <button class="fa fa-search fa-2x" type="submit"  id="searchsubmit" style="color: steelblue"></button>
                  </form>
                </li> 


                  
            </div>
        </nav>  
      </div>
     @include('include/LoginShop')
    
      
      