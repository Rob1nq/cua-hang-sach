    <style>
        #collapseExample,#collapseExample1,#collapseExample2,#collapseExample3{
            list-style: none;
            margin-left: -30px;
            padding-left: 30px;
        }
        .nav-link:hover {
        color: #f8f9fa;
        text-decoration: underline;
        background-color: steelblue;
        }
        .col-md-2{
            padding-right: 0px;
            min-height: 90vh !important; 
            min-width: 10vh !important;         
        
        }
    </style>
<div class="col-md-2 navbar-light bg-light"> 
	

     <aside id="basicSidebar" class="pmd-sidebar bg-light" role="navigation">
        <ul class="nav flex-column pmd-sidebar-nav">

        	
            <li class="nav-item">
                <a class="nav-link" href="{{route('trangchu')}}">
                    <span class="fa fa-tachometer"> <span style="font-family: verdana; font-size: 16px"> &nbspDashboard</span></span>
                    
                </a>
            </li>
            <li class="nav-item ">
                <a data-toggle="collapse" href="#collapseExample1" class="nav-link btn-user media align-items-center">                    
                    <div class="media-body">
                        <span class="fa fa-database "><span style="font-family: verdana; font-size: 16px"> &nbspSách</span></span> <span style="float: right;padding-top:0.4rem;" class="fa fa-chevron-right rotate"></span>
                        <script>
                            $(".rotate").click(function () {
                             $(this).toggleClass("down");
                             })
                        </script>
                        <style>
                            .rotate {
                               
                                -moz-transition: all .1s linear;
                                -webkit-transition: all .1s linear;
                                transition: all .1s linear;
                            }
                            .rotate.down {

                                -moz-transform:rotate(90deg);
                                -webkit-transform:rotate(90deg);
                                transform:rotate(90deg);
                                padding-bottom: 0.5rem !important;
                            }
                            
                        </style>
                    </div>
                    
                </a>
                <ul class="collapse" id="collapseExample1" data-parent="#basicSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('NXB')}}" id="navlink">
                                <span class="fa fa-plus"><span style="font-family: verdana;"> &nbsp;NXB</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('theloai')}}"id="navlink">
                            <span class="fa fa-plus"><span style="font-family: verdana; "> &nbsp;Thể loại</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tacgia')}}"id="navlink">
                            <span class="fa fa-plus"> <span style="font-family: verdana; "> &nbsp;Tác giả</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dausach')}}"id="navlink">
                            <span class="fa fa-plus"> <span style="font-family: verdana; "> &nbsp;Đầu sách</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('qlsach')}}" id="navlink">
                                <span class="fa fa-plus"> <span style="font-family: verdana;"> &nbsp;Thêm Sách</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getdanhsachphieunhap')}}"id="navlink">
                            <span class="fa fa-plus"> <span style="font-family: verdana; "> &nbsp;Danh sách sách</span></span>
                        </a>
                    </li>

                    
                </ul>
            </li>
            {{--  --}}

            <li class="nav-item">
                <a data-toggle="collapse" href="#collapseExample" class="nav-link media align-items-center">
                    
                    <div class="media-body">
						<span class="fa fa-thumb-tack "> <span style="font-family: verdana; font-size: 16px"> &nbspNhập sách </span></span><span style="float: right;padding-top:0.4rem;" class="fa fa-chevron-right"></span>
					</div>
                </a>
                <ul class="collapse" id="collapseExample" data-parent="#basicSidebar">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('phieunhap')}}"id="navlink">
                            <span class="fa fa-plus"> <span style="font-family: verdana; "> &nbsp;Phiếu nhập</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('danhsachpn')}}"id="navlink">
                            <span class="fa fa-plus"> <span style="font-family: verdana; "> &nbsp;DS Phiếu Nhập</span></span>
                        </a>
                    </li>
                    
                    
                </ul>
            </li>
        
           
            <li class="nav-item">
                <a class="nav-link" href="{{ route('khachhang')}}">
                	<span class="fa fa-cube"> <span style="font-family: verdana; font-size: 16px"> &nbspKhách hàng</span></span>
                    
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('hoadon')}}">
                	<span class="fa fa-money"> <span style="font-family: verdana; font-size: 16px"> &nbspHóa đơn</span></span>
                    
                </a>
            </li>
           
            <li class="nav-item">
                <a data-toggle="collapse" href="#collapseExample3" class="nav-link media align-items-center">
                    
                    <div class="media-body">
                        <span class="fa fa-bar-chart"> <span style="font-family: verdana; font-size: 16px"> &nbspBáo cáo</span></span><span style="float: right;padding-top:0.4rem;" class="fa fa-chevron-right"></span>
                    </div>
                </a>
                <ul class="collapse" id="collapseExample3" data-parent="#basicSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('baocaosoluongnhap')}}" id="navlink">
                                <span class="fa fa-plus"> <span style="font-family: verdana;"> &nbsp;Số lượng nhập</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('get_BaoCaosoluongban')}}"id="navlink">
                            <span class="fa fa-plus"> <span style="font-family: verdana; "> &nbsp;Số lượng bán</span></span>
                        </a>
                    </li>
                    
                    
                </ul>
            </li>
            {{--  --}}
            <li class="nav-item">
                <a class="nav-link" href="{{route('doanhthu')}}">
                	<span class="fa fa-bar-chart"> <span style="font-family: verdana; font-size: 16px"> &nbspDoanh thu</span></span>
                    
                </a>
            </li>
           
            <li class="nav-item ">
                <a data-toggle="collapse" href="#collapseExample2" class="nav-link btn-user media align-items-center">
                    
                    <div class="media-body">
                        <span class="fa fa-users"> <span style="font-family: verdana; font-size: 16px"> &nbspUsers</span></span><span style="float: right;padding-top:0.4rem;" class="fa fa-chevron-right"></span>
                    </div>
                </a>
                <ul class="collapse" id="collapseExample2" data-parent="#basicSidebar">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getAddUser')}}" id="navlink">
                                <span class="fa fa-plus"><span style="font-family: verdana;"> &nbsp;Thên thành viên</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('getList')}}"id="navlink">
                            <span class="fa fa-plus"><span style="font-family: verdana; "> &nbsp;Danh sách thành viên</span></span>
                        </a>
                    </li>                    
                    
                </ul>
            </li>
            
            
        </ul>
    </aside>

</div>