<div class='lentop'>
    <div>
    <img src='source/images/top.png'/>
    </div>
    <style>
      .lentop {
        display:none; 
        bottom: 40%; 
        right: 10px; 
        cursor: pointer;  
        position: fixed;
        z-index: 1000;}
      .lentop div {
        background:#009933;
         border:2px solid #fff; 
         border-radius:45px; 
         padding:11px 12.5px; 
         box-shadow: 1px 3px 5px 0px rgba(0, 0, 0, 0.3)
       }
      .lentop img {width:16px; height:16px;} 

    </style>
    <script src="source/js/jquery-latest.js"></script>
    <script>
      $(function(){
      $(window).scroll(function () {
      if ($(this).scrollTop() > 100) $(".lentop").fadeIn();
      else $(".lentop").fadeOut();
      });
      $(".lentop").click(function () {
      $("body,html").animate({scrollTop: 0}, "slow");
    });
    }); 
    </script>
</div> 