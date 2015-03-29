
  @include('adminInclude/head')


  {{--headeer section--}}
  <header class="site-header">
        @include('adminInclude/header')
  </header>
  {{--end of header section--}}

  {{--navigation section--}}
   @include('adminInclude/navigation')
  {{--end of navigation section--}}

  {{--container section--}}
  <div class="container">
      <div class="left-container">
            @yield('adminContent')
      </div>
      <div class="right-widget">
            @include('adminInclude/widget')
      </div>
  </div>
  {{--end of container--}}

   {{--footer section--}}
   <footer class="site-footer">
        @include('adminInclude/footer')
   </footer>

