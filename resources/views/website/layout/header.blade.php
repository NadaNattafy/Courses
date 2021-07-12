@yield('title')
<meta name="author" content="Amir Nageh">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- Css Files -->
@stack('style')
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/selectric.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/reset.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/images/favicon.png') }}" rel="icon" type="text/css">
{{-- 
<header>

    <div class="signup-area">
        <div class="container">
            <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                <h1>تسجيل الدخول</h1>
                <form action="{{ route('website.login.user') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="login-item">
                        <input type="email" name="email" placeholder="بريد المستخدم">
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

            <div class="signup-form col-md-6 col-xs-12 text-right" style="display: none;">
                <h1>تسجيل عضوية جديدة</h1>
                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول
                    علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا
                </p>
                <a href="#">
                    <i class="fa fa-user-plus"></i> تسجيل عضوية
                </a>
            </div>
            <!-- /.signup-form -->

            <div class="signup-form col-md-6 col-xs-12 text-right">
                <h1>تسجيل عضوية جديدة</h1>
                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                <a href="{{ route('website.signup.index') }}">
                    <i class="fa fa-user-plus"></i> تسجيل عضوية
                </a>
            </div>
            <!-- /.signup-form -->

            <!-- =========================================================================================================================================== -->

            <div class="panel-pop modal" id="forget">
                <div class="lost-inner">
                    <h1>هل نسيت كلمة المرور ؟</h1>
                    <div class="lost-item">
                        <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول">
                    </div>
                    <!-- /.lost-item -->
                    <div class="text-center">
                        <input type="submit" value="إعادة ضبط">
                    </div>
                    <!-- /.lost-item -->
                </div>
                <!-- /.lost-inner -->
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.login-area -->

    <div class="dividers">
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
        <span class="t4"></span>
        <span class="t5"></span>
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
        <span class="t4"></span>
        <span class="t5"></span>
    </div>

    <!-- /.dividers -->

    <div class="header-nav">
        <div class="container">
            <div class="nav-right col-md-8 col-xs-12 pull-right">
                <div class="logo">
                    <a href="index.html" title="العلوم العصرية للتدريب">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" width="110" height="70">
                    </a>
                </div>
                <!-- /.logo -->
            </div>
            <!-- /.nav-logo -->
            <div class="nav-left col-md-4 col-xs-12 pull-left">
                <div class="user-controls">
                    <ul>
                        @guest
                            <li>
                                <a href="#" class="show-login">
                                    <i class="fa fa-user"></i> منطقة تسجيل الدخول
                                </a>
                            </li>
                        @endguest
                        @auth
                            <li>
                                {{-- <a href="#"> --}}
                                <a href="{{ route('website.logout') }}" onclick="event.preventDefault(); document.getElementById('logout_form').submit()">
                                    <i class="fa fa-user"></i> منطقة تسجيل خروج
                                    <form id="logout_form" action="{{ route('website.logout') }}" method="POST"
                                    style="display: none;">
                                  @csrf
                              </form>
                                </a>
                            </li>
                        @endauth


                        <!--
                <li>
<a href="#">
<i class="fa fa-user-plus"></i> تسجيل عضوية
</a>
</li>
-->
                    </ul>
                </div>
                <!-- /.user-controls -->
            </div>
            <!-- /.nav-user -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-nav -->
</header> --}}
