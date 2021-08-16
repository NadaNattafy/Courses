@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> العلوم العصرية للتدريب | إضافة دورة جديدة </title>
@endsection

@section('content')

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
</div>

<div class="up-container">

    <div class="up-header text-center">
        <div class="container">
            <h1>إضافة دورة جديدة</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form">

                <form action="#" method="get" class="add-form">
                    <div class="up_form-item">
                        <h1>عنوان الدورة</h1>
                        <input type="text" placeholder="اضف عنوان الدورة">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <h1>متطلب سابق</h1>
                        <input type="text" placeholder="إسم المستخدم">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <h1>المجال</h1>
                        <select>
                            <option>علوم حاسب</option>
                            <option>علوم حاسب</option>
                            <option>علوم حاسب</option>
                            <option>علوم حاسب</option>
                        </select>
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <h1>رابط فيديو</h1>
                        <div class="add_cont text-right">
                            <div class="lecture-item">
                                <div class="add_cont text-right">
                                    <label class="text-right">
                                        <input type="checkbox" id="up-video">
                                        <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                    </label>

                                    <div class="videoUploaded col-xs-12 text-right">
                                        <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                        <input type="file" class="uploaded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush
