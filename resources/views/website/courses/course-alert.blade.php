@extends('website.layout.master')

@push('style')
    <link href="{{ asset('assets/css/video-js.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('title')
    <title>صفحة الكورس المنفرد | العلوم العصرية للتدريب</title>
@endsection

@section('content')

    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper">
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
                        <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع
                            الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب
                            جديد من هنا </p>
                        <a href="{{ route('website.signup.index') }}">
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
                            <a href="{{ route('website.home.index') }}" title="العلوم العصرية للتدريب">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" width="110" height="70">
                            </a>
                        </div>
                        <!-- /.logo -->
                    </div>
                    <!-- /.nav-logo -->
                    <div class="nav-left col-md-4 col-xs-12 pull-left">
                        <div class="user-controls">
                            <ul>

                                @if (auth('web')->check() || auth('trainer')->check())
                                    @auth
                                        <li>
                                            {{-- <a href="#"> --}}
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout_form').submit()">
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
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout_form_trainer').submit()">
                                                <i class="fa fa-user"></i> منطقة تسجيل خروج
                                            </a>
                                            <form id="logout_form_trainer" action="{{ route('trainer.logout') }}"
                                                method="POST" style="display: none;">
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
                                        <a href="{{ route('trainer.trainerlogin.index') }}" class="show-login">
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
    </div>

    <div class="intro-container col-xs-12">
        <div class="intro-head text-center">
            <div class="container">
                <h1>كورس البرمجة بلغة الجافا</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->

        <div class="corse-box col-xs-12">
            <div class="corse-nav text-center">
                <div class="container">
                    <ul>
                        <li>
                            <a href="#" class="active">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                        <li>
                            <a href="{{ route('website.comments.index') }}">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('website.alerts.index') }}">
                                <span class="padge">
                                    {{ $remarks->count() }}
                                </span>
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->
            <div class="lesson-box text-right">
                <div class="container">
                    <div class="alert-box">
                        <div class="all-alerts col-xs-12 text-right">
                            @foreach ($remarks as $remark)
                                <ul>
                                    <li>
                                        <h1> عنوان التنويه : {{ $remark->title }}</h1>
                                        <span>
                                            {{ \Carbon\Carbon::parse($remark->created_at)->format('M d Y') }}
                                        </span>
                                        <p> مضمون التنويه : {{ $remark->body }}</p>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- end alert-box -->
                </div>
                <!-- end container -->
            </div>
            <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>

@endsection

@push('script')

    <script src="{{ asset('assets/js/video.js') }}" type="text/javascript"></script>

@endpush
