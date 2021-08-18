@extends('website.layout.master')

@push('style')

@endpush

@section('title')
    <title> تسجيل الدخول للمتدرب </title>
@endsection

@section('content')

    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <div class="wrapper st-container" id="st-container">
        <!-- content push wrapper -->
        <div class="st-pusher">
            <nav class="st-menu st-effect-8" id="menu-8">
                <h2 class="icon icon-stack">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive">
                </h2>
                <ul>
                    <li><a class="icon icon-data" href="{{ route('website.home.index') }}"><i class="fa fa-user"></i>
                            الرئيسية</a></li>
                    <li><a id="sd" class="icon icon-location" href="{{ route('website.about.index') }}"><i
                                class="fa fa-group"></i>من نحن</a></li>
                    <li><a class="icon icon-study" href="#"><i class="fa fa-plus"></i> اضافة دورة</a></li>
                    <li><a class="icon icon-photo" href="#"><i class="fa fa-plus"></i>اضافة محاضرة</a></li>
                    <li><a class="icon icon-wallet" href="#"><i class="fa fa-plus"></i>اضافة اختبار</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.allcourses.index') }}"><i
                                class="fa fa-database"></i>جميع الدورات</a></li>
                    <li><a class="icon icon-location" href="#"><i class="fa fa-rocket"></i>قسم معين</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.certif.index') }}"><i
                                class="fa fa-file"></i>شهادة التقدير</a></li>
                    <li><a class="icon icon-photo" href="{{ route('website.contact.index') }}"><i
                                class="fa fa-phone"></i>اتصل بنا</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.alerts.index') }}"><i
                                class="fa fa-alerts"></i>التنبيهات</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.comments.index') }}"><i
                                class="fa fa-comments"></i>التعليقات</a></li>
                    <li><a class="icon icon-location" href="#"><i class="fa fa-rocket"></i>درس معين</a></li>
                    <li><a class="icon icon-study" href="#">مقدمة الدرس</a></li>
                    <li><a class="icon icon-photo" href="#">صفحة الدرس</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.profile.index') }}"><i
                                class="fa fa-user"></i>الحساب الشخصي</a></li>
                    <li><a class="icon icon-data" href="#">تغير كلمة المرور</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.signup.index') }}"><i
                                class="fa fa-user-plus"></i>تسجيل حساب جديد</a></li>
                    <li><a class="icon icon-study" href="#">صفحة الاختبار</a></li>
                    <li><a class="icon icon-photo" href="#"><i class="fa fa-lock"></i>سياسة الخصوصية</a></li>
                </ul>
            </nav>
            <div class="st-content">

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
            </div>
            <div id="st-trigger-effects" class="column">

                <button data-effect="st-effect-8" class="st_show">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
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
            </header>

            <div class="up-container">
                <div class="up-header text-center">
                    <div class="container">
                        <h1>تسجيل الدخول المدرب</h1>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.up-header -->
                <div class="up-box">
                    <div class="container">
                        <div class="up-form forget-panel">

                            <form action="{{ route('trainer.login') }}" method="POST">
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

                        </div>
                        <!-- /.up-form -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.up-box -->
            </div>

        @endsection

        @push('script')


        @endpush
