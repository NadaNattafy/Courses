<!DOCTYPE html>
<html lang="en">
<head>
  @include('website.layout.header')
</head>
<body>

<!--===============================
    NAV
===================================-->

@include('website.layout.navbar')

<!--===============================
    SLIDER
===================================-->

@include('website.layout.sidebar')

<div class="content-page">
    <div class="content">
        @yield('content')
    </div>

</div>

<!--===============================
    FOOTER
===================================-->
@include('website.layout.footer')

<!--===============================z
    SCRIPT
===================================-->

<script src="{{asset('assets/js/jquery-2.2.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/html5shiv.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery-smoothscroll.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/placeholdem.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/toucheffects.js')}}"></script>
<script src="{{asset('assets/js/jquery.selectric.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/classie.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/script.js')}}" type="text/javascript"></script>
@stack('script')
</body>
</html>
