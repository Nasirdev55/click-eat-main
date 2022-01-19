<!doctype html>
<html lang="en">
  <head>
    @include('layouts.click-eat-main.header-links')

    <title>@yield('title')</title>
    @yield('extra_css')
  </head>
  <body>
   
    @include('layouts.click-eat-main.header')

   
@yield('content')



   
     


   @include('layouts.click-eat-main.footer')

   @include('layouts.click-eat-main.footer-links')
  </body>
</html>