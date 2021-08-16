@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> الموقع </title>
@endsection

@section('content')

<header>
    <div class="error-detect">
        <div class="container">
            <div class="error text-center">
                <h1 class="danger-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                <h1 class="message-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                <h1 class="success-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
            </div>
            <!-- /.error-danger -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.error-detect -->
    <div class="login-area">
        <div class="container">
            <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                <h1>تسجيل الدخول</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="login-item">
                        <input type="text" name="email" placeholder="بريد المستخدم">
                    </div>
                    <!-- /.login-item -->
                    <div class="login-item">
                        <input type="password" name="password" placeholder="كلمة السر">
                    </div>

                    <!-- /.login-item -->
                    <div class="login-item">
                        <label class="pull-right">
                            <input type="checkbox">
                            <span>تذكر كلمة السر دائماً</span>
                        </label>
                        <label class="pull-left">
                            <a href="#" class="forget">هل نسيت كلمة المرور ؟</a>
                        </label>
                    </div>
                    <!-- /.login-item -->
                    <div class="login-item">
                        <input type="submit" value="دخول">
                    </div>
                </form>
                <!-- /.login-item -->
            </div>
            <!-- /.login-form -->

            <div class="signup-form col-md-6 col-xs-12 text-right">
                <h1>تسجيل عضوية جديدة</h1>
                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                <a href="{{route('website.signup.index')}}">
                    <i class="fa fa-user-plus"></i> تسجيل عضوية
                </a>
            </div>
            <!-- /.signup-form -->

            <!-- =========================================================================================================================================== -->
            <form action="{{ route('password.email') }}" method="POST">
                @csrf

            <div class="panel-pop modal" id="forget">
                <div class="lost-inner">
                    <h1>هل نسيت كلمة المرور ؟</h1>
                    <div class="lost-item">
                        <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول" name="email">
                    </div>
                    <!-- /.lost-item -->
                    <div class="text-center">
                        <input type="submit" value="إعادة ضبط">
                    </div>
                    <!-- /.lost-item -->
                </div>
                <!-- /.lost-inner -->
            </div>
        </form>
            <!-- /.modal -->

            <!-- =========================================================================================================================================== -->
        </div>
        <!-- /.container -->
    </div>
    <div class="header-nav">
        <div class="container">
            <div class="nav-right col-md-8 col-xs-12 pull-right">
                <div class="logo">
                    <a href="{{route('website.home.index')}}" title="العلوم العصرية للتدريب">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" width="110" height="70">
                    </a>
                </div>
                <!-- /.logo -->
            </div>
            <!-- /.nav-logo -->
            <div class="nav-left col-md-4 col-xs-12 pull-left">
                <div class="user-controls">
                    <ul>

                       @if(auth('web')->check() || auth('trainer')->check() )
                                    @auth
                                    <li>
                                        {{-- <a href="#"> --}}
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout_form').submit()">
                                            <i class="fa fa-user"></i> منطقة تسجيل خروج
                                            <form id="logout_form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        </a>
                                    </li>
                                @endauth
                            @auth('trainer')
                            <li>
                                {{-- <a href="#"> --}}
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout_form_trainer').submit()">
                                    <i class="fa fa-user"></i> منطقة تسجيل خروج
                                </a>
                                <form id="logout_form_trainer" action="{{ route('trainer.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endauth

                        @else
                        <li>
                            <a href="#" class="show-login">
                                <i class="fa fa-user"></i> منطقة تسجيل الدخول
                            </a>
                        </li>

                        <li>
                            <a href="{{route('trainer.trainerlogin.index')}}" class="show-login">
                                <i class="fa fa-user"></i> منطقة تسجيل المدرب
                            </a>
                        </li>

                   @endif

                    </ul>
                </div>
                <!-- /.user-controls -->
            </div>
            <!-- /.nav-user -->
        </div>
        <!-- /.container -->
    </div>

</header>

<div class="wrapper">

    <div class="profile-content empty-course">
        <div class="container">
            <div class="right_tap-box col-md-3 col-xs-12 hidden-xs hidden-sm pull-right">
                <div class="right_box-inner">
                    <!-- Nav tabs -->
                    <a class="toggle-slidenav hidden-xs hidden-sm">
                        <i class="fa fa-close"></i>
                    </a>
                    <form id="imageEditor">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <label for="gs">Grayscale</label>
                                <input id="gs" name="gs" type="range" min=0 max=100 value=0>
                            </li>
                            <li role="presentation">
                                <label for="blur">Blur</label>
                                <input id="blur" name="blur" type="range" min=0 max=10 value=0>
                            </li>
                            <li role="presentation">
                                <label for="br">Brightness</label>
                                <input id="br" name="br" type="range" min=0 max=200 value=100>
                            </li>

                            <li role="presentation">
                                <label for="ct">Contrast</label>
                                <input id="ct" name="ct" type="range" min=0 max=200 value=100>
                            </li>

                            <li role="presentation">
                                <label for="huer">Hue Rotate</label>
                                <input id="huer" name="huer" type="range" min=0 max=360 value=0>
                            </li>
                            <li role="presentation">
                                <label for="opacity">Opacity</label>
                                <input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
                            </li>
                            <li role="presentation">
                                <label for="invert">Invert</label>
                                <input id="invert" name="invert" type="range" min=0 max=100 value=0>
                            </li>

                            <li role="presentation">
                                <label for="saturate">Saturate</label>
                                <input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
                            </li>

                            <li role="presentation">
                                <label for="sepia">Sepia</label>
                                <input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
                            </li>
                            <li>
                                <input type="reset" form="imageEditor" id="reset" value="Reset" />
                            </li>
                        </ul>
                    </form>
                </div>
                <!-- /.right_box-inner -->
            </div>
            <!-- /.right_tap-box -->


            <div class="left_tap-box col-md-9 col-xs-12 pull-left">
                <div class="left_box-inner">
                    <!-- Tab panes -->
                    <div id="imageContainer" class="center">
                        <img src="{{asset('assets/images/b3.jpg')}}" class="img-responsive" />
                    </div>
                </div>
                <!-- /.left_tap-box -->
            </div>
            <!-- /.left_tap-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.profile-content -->

</div>
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>

@endsection

@push('script')
<script src="{{asset('assets/main.js')}}"></script>
@endpush
