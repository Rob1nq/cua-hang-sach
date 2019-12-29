@include('include/head')
<body {{-- class="navbar-light bg-light" --}} style="background-color: #C7DFDE">  
<div class="container navbar-light bg-light ">
	@include('include/backtotop')
      {{-- Menu --}}
	@include('include/mainmenu')
      {{-- Content--}}
      
        @yield('noidung')
      
      {{-- Footer --}}
      @include('include/footer1')
      @include('include/footer2')
</div>

</body>
</html>