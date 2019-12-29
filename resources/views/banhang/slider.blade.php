    <div class="space20">&nbsp;</div>       
    <div id="mycarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1" class=""></li>
        </ol>

        <!--Các slide bên trong carousel-inner-->
        <div class="carousel-inner">

            <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
            <div class="carousel-item active">
                <img class="d-block w-100" src="source/bootstrap/images/slide4.jpg" width="auto"  style="max-height:70vh; min-height: 50vh">
                <!--Cho thêm hiện thị thông tin-->
                <div class="carousel-caption d-none d-md-block" style="color: black">
                    {{-- <h5>Giá rẻ bất ngờ </h5>
                    <p>Giảm giá 20%</p> --}}
                </div>
            </div>      

            <!--Slide 2-->
            <div class="carousel-item">
                <img class="d-block w-100" src="source/bootstrap/images/slider5.jpg" width="auto" style="max-height: 70vh; min-height: 50vh" >
                <div class="carousel-caption d-none d-md-block" style="color: black">
                    {{-- <h5>There are no friend as a loyal as a book</h5>
                    <p>Ernest Hemingway</p> --}}
                </div>
            </div>
           
        </div>
            <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
            <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        
    </div>
