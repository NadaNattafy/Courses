@extends('website.layout.master')

@push('style')
<link href="{{asset('assets/css/video-js.css')}}" rel="stylesheet" type="text/css">
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

        <div class="signup-area">
            <div class="container">
                <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                    <h1>تسجيل الدخول</h1>
                    <div class="login-item">
                        <input type="text" placeholder="إسم المستخدم">
                    </div>
                    <!-- /.login-item -->
                    <div class="login-item">
                        <input type="password" placeholder="كلمة السر">
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
                    <!-- /.login-item -->
                </div>
                <!-- /.login-form -->

                <div class="signup-form col-md-6 col-xs-12 text-right" style="display: none;">
                    <h1>تسجيل عضوية جديدة</h1>
                    <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                    <a href="#">
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
                <!-- /.modal -->

                <!-- =========================================================================================================================================== -->



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
    </header>

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
                        <a href="{{route('website.courses.index')}}">
                            <i class="fa fa-tasks"></i> الدروس
                        </a>
                    </li>

                    <li>
                        <a href="{{route('website.comments.index')}}" class="active">
                            <i class="fa fa-commenting-o"></i> النقاشات
                        </a>
                    </li>

                    <li>
                        <a href="#">
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
                <div class="comments-disqus">
                    <div class="empty-msg text-center animated shake">
                        {{-- <h1>
                            <i class="fa fa-frown-o"></i>
                            لا يوجد دروس الان ولكن يمكنك الاشتراك في الدورة لحين بدأها
                        </h1> --}}
                        <ul>
                            @foreach ($comments as $comment)
                            <li>
                                    <a href="#" class="lesson-det">
                                        <i class="fa fa-play-circle"></i>
                                        <span class="lesson-name">  التعليق :
                                            {{ $comment->comment }}</span>
                                    </a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- end empty-msg -->
                </div>
                <!-- end comments-disqus -->
            </div>
            <!-- end container -->
        </div>
        <!-- end lesson-box -->
    </div>
    <!-- end corse-box -->

</div>
<!-- /.intro-container -->

@endsection

@push('script')

<script src="{{asset('assets/js/video.js')}}" type="text/javascript"></script>

@endpush
