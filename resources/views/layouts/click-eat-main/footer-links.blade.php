<script src="{{asset('main-assets/js/jquery/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('main-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('main-assets/js/style.js')}}"></script>
<script>
     switch (window.location.pathname) {
    case '/':
       $('.link1').addClass('active-link');
       break;
       case '/about':
       $('.link2').addClass('active-link');
       break;
       case '/services':
       $('.link3').addClass('active-link');
       break;
       case '/packages':
       $('.link4').addClass('active-link');
       break;
       case '/contact-us':
       $('.link5').addClass('active-link');
       break;
     }
    </script>