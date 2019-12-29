	
	<div class="col-md-3">
	    <div class="navbar-light bg-light">
	          <div class="card-header bg-secondary">
	          	<h6 align="center"><i class="fa fa-bars fa-2x">&nbsp;</i>DANH MỤC SÁCH</h6>
	          </div>
	          <a class="nav-link" id="id1" href="{{route('giaotrinh')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp;Giáo trình</span></a>
	          <a class="nav-link" id="id1" href="{{route('thieunhi')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp;Thiếu nhi</span></a>
	          <a class="nav-link" id="id1" href="{{route('tieuthuyet')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp;Tiểu thuyết</span></a>
	          <a class="nav-link" id="id1" href="{{route('vanhoc')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp;Văn học</span></a>
	          <a class="nav-link" id="id1" href="{{route('truyenngan')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp;Truyện ngắn</span></a>
	          <a class="nav-link" id="id1" href="{{route('sachtuluc')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp; Self-help</span></a>
	          <a class="nav-link" id="id1" href="{{route('khoahoc')}}"><span class="fa fa-angle-double-right  fa-2x">&nbsp;Khoa học</span></a>
	
	    </div>
	                
	    <div class="dropdown-divider"></div>
	    <div class="navbar-light bg-light">
	        <div class="card-header bg-secondary">
	        	<h6 align="center"><i class="fa fa-clock-o fa-2x">&nbsp;</i>THỜI GIAN HOẠT ĐỘNG</h6> 
	        </div> 
	        <div>   
	        	<div class="card-text">

	                <a class="nav-link" id="id1"><span class="fa fa-clock-o fa-2x">Buổi sáng :7h-12h</span></a>
	                <a class="nav-link" id="id1"><span class="fa fa-clock-o fa-2x">Buổi chiều: 13h-17h</span></a>                   
	                    
	            </div>                       
	        </div>             
	    </div>
	   	<div class="dropdown-divider"></div>

	    <div class="navbar-light bg-light">
	    	<div class="card-header bg-secondary">
	    		<h6 align="center"><i class="fa fa-money fa-2x">&nbsp;</i>GIÁ</h6>
	    		
	    	</div>
	    	<div>
	    		<form method="GET" action="{{route('timkiemgia')}}">
				  <div class="form-group">
				    <label for="formControlRange">Tìm theo giá</label>
 					<input type="range" class="form-control-range" id="formControlRange" name="gia"  min=0 max=500000 step="10000" name="giaban">	
 					<input type="submit" name="loc" value="Lọc" id="loc"> Giá:<span id="gia"></span>
			 
 				 </div>
				</form>
	    		<script>
	    			$(document).ready(function () {
	    				$('input[type=range]').click(function(){
	    					var str=$('#formControlRange').val();
	    					$('#gia').html(str+'đ');
	    				});
	    		});
	    		</script>

	    	</div>
	    	
	    </div>    



