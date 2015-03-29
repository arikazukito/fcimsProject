
  @include('include/head')


  {{--headeer section--}}
  <header class="site-header">
        @include('/include/header')
  </header>
  {{--end of header section--}}

  {{--navigation section--}}
   @include('include/navigation')
  {{--end of navigation section--}}

  {{--container section--}}
  <div class="container">
      <div class="left-container">
            @yield('content')
      </div>
      <div class="right-widget">
            @include('include/widget')
      </div>
  </div>
  {{--end of container--}}

   {{--footer section--}}
   <footer class="site-footer">
        @include('include/footer')
   </footer>

