@extends('website.layout.master')

@push('style')

@endpush

@section('title')
    <title> العلوم العصرية للتدريب | عن الموقع </title>
@endsection

@section('content')

    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper st-container" id="st-container">
        <!-- content push wrapper -->
        <div class="st-pusher">

            <nav class="st-menu st-effect-8" id="menu-8">
                <span class="close-nav" title="Close">
                    <i class="fa fa-times"></i>
                </span>
                <h2 class="icon icon-stack">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive">
                </h2>
                <ul>
                    <li><a class="icon icon-data" href="{{ route('website.home.index') }}"><i class="fa fa-user"></i>
                            الرئيسية</a></li>
                    <li><a id="sd" class="icon icon-location" href="{{ route('website.about.index') }}"><i
                                class="fa fa-group"></i>من نحن</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.addcourses.index') }}"><i class="fa fa-plus"></i>
                            اضافة دورة</a></li>
                    <li><a class="icon icon-photo" href="{{ route('website.addlectures.index') }}"><i
                                class="fa fa-plus"></i>اضافة محاضرة</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.addtests.index') }}"><i
                                class="fa fa-plus"></i>اضافة اختبار</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.allcourses.index') }}"><i
                                class="fa fa-database"></i>جميع الدورات</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.category.index') }}"><i
                                class="fa fa-rocket"></i>قسم معين</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.certif.index') }}"><i
                                class="fa fa-file"></i>شهادة التقدير</a></li>
                    <li><a class="icon icon-photo" href="{{ route('website.contact.index') }}"><i
                                class="fa fa-phone"></i>اتصل بنا</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.alerts.index') }}"><i
                                class="fa fa-alerts"></i>التنبيهات</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.comments.index') }}"><i
                                class="fa fa-comments"></i>التعليقات</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.courses.index') }}"><i
                                class="fa fa-rocket"></i>درس معين</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.introcourses.index') }}">مقدمة الدرس</a></li>
                    <li><a class="icon icon-photo" href="#">صفحة الدرس</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.profile.index') }}"><i
                                class="fa fa-user"></i>الحساب الشخصي</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.reset.index') }}">تغير كلمة المرور</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.signup.index') }}"><i
                                class="fa fa-user-plus"></i>تسجيل حساب جديد</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.tests.index') }}">صفحة الاختبار</a></li>
                    <li><a class="icon icon-photo" href="{{ route('trainer.trainer.index') }}"><i
                                class="fa fa-lock"></i>سياسة الخصوصية</a></li>
                </ul>
            </nav>
            <!-- /.st-effect-8 nav -->


            <div class="st-content">

                <div id="st-trigger-effects" class="column">
                    <button data-effect="st-effect-8" class="st_show">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- /.st-trigger -->


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
                                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن
                                    تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع
                                    تسجيل حساب جديد من هنا </p>
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
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" width="110"
                                            height="70">
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
        </div>
    </div>

    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>معلومات عن الموقع</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box about-box">
            <div class="container">
                <div class="about-img col-md-4 col-xs-12 pull-left">
                    <img src="{{ asset('assets/images/3lom.jpg') }}" class="img-responsive" alt="">
                </div>
                <!-- end about-img -->
                <div class="about-data col-md-8 col-xs-12 pull-right text-right">
                    <p>
                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض
                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً
                        أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص
                        لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة،
                        يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من
                        الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص
                        الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم
                        إيبسوم حقيقي على الإنترنت.


                    </p>
                </div>
                <!-- end about-data -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
@endsection

@push('script')

@endpush
