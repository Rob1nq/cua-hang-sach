{{-- header --}}
@include('include/header')
<body>
  <div >
  <!-- menu -->
  
  @include('include/menuql')
  <!-- Nội dung -->
  <div class="row">
  <!-- Menu dọc <--></-->
    @include('include/vertical_menu')
    {{-- noi dung --}}
    @yield('content')

  </div> 
  <!-- Footer -->
    @include('include/footer')


  </div>
  
</body>
</html>