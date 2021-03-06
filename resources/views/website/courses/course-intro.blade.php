@extends('website.layout.master')

@push('style')
    <link href="{{ asset('assets/css/video-js.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('title')
    <title>مقدمة الكورس | العلوم العصرية للتدريب</title>
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

    <div class="intro-container">
        <div class="intro-head text-center">
            <div class="container">
                <h1>مقدمة في كورس البرمجة بلغة الجافا سكربت</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->
        <div class="intro-box">
            <div class="container">
                <div class="intro-name text-right">
                    <div class="name-head col-md-7 col-xs-12 pull-right">
                        <h1>البرمجة بلغة الجافا سكربت</h1>
                    </div>
                    <div class="extras col-md-5 col-xs-12">
                        <span>$ 250</span>
                        <div class="intro-rating">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star-half-o"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end intro-rating -->
                    </div>
                </div>
                <!-- /.intro-name -->
                <div class="intro-video col-xs-12 text-center">
                    <!--                        <iframe width="100%" height="520" src="https://www.youtube.com/embed/tTgD9m1p5Ss?list=PLT56sSeAKiIvfQhsA2lXUUmjfh0JyEFU7" frameborder="0" allowfullscreen></iframe>-->
                    <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="520"
                        poster="images/3lom.jpg">
                        <source src="{{ asset('assets/images/test.mp4') }}" type='video/mp4' />
                    </video>
                </div>
                <!-- /.intro-video -->
                <div class="intro-date col-xs-12 text-right">
                    <h1>
                        <i class="fa fa-calendar"></i>
                        من : 01 فبراير 2016 إلى : 27 ابريل 2016 (12 اسبوع)
                    </h1>
                    <a href="#" class="show-credit">
                        <i class="fa fa-paper-plane"></i> إشترك في الدورة
                    </a>
                    <a href="{{ route('profile') }}">
                        <i class="fa fa-cog"></i> عدل ملفك الشخصي لتستطيع الاشتراك في الدورة
                    </a>
                </div>
                <!-- /.intro-date -->
                <div class="intro-details text-right">
                    <p>هذه المادة هي مقدمة لعلم البرمجة باستخدام لغة جافا. في هذه المادة ستتعلم البرمجة من الصفر دون الحاجة
                        لخلفية مسبقة. هذه المادة مناسبة لجميع الأعمار من المرحلة المتوسطة فما فوق. هذه المادة ستكون أساس
                        يتعلم فيه الطالب أساسيات علم البرمجة ولغة جافا لكي يكون قادرا فيما بعد على البرمجة بلغة جافا على
                        جوالات أندرويد أو برمجة تطبيقات الويب والانترنت.
                    </p>
                </div>
                <!-- /.intro-details -->

                <div class="intro-extra col-xs-12">
                    <div class="intro-instructor col-md-6 col-xs-12 text-right pull-left">
                        <div class="intro_instructor-inner">
                            <h1>عن المدرس</h1>
                            <div class="avatar text-center">
                                <div class="av-inner">
                                    <img src="{{ asset('assets/images/s.png') }}" alt="" width="80" height="80">
                                </div>
                                <!-- /.av-inner -->
                            </div>
                            <!-- /.avatar -->
                            <div class="instructor-data">
                                <a href="#" class="know-teacher" data-toggle="tooltip" data-placement="top"
                                    title="اضغط لمعرفة هوية المحاضر">أمير ناجح</a>
                                <p>أستاذ مساعد في كلية الحاسب في جامعة الملك سعود ومستشار لامن المعلومات في مركز التميز لأمن
                                    المعلومات في الجامعة حاصل على شهادة البكالوريوس في علوم الحاسب بتقدير امتياز مع مرتبة
                                    الشرف الاولى من جامعة الملك سعود حاصل على جائزة الطالب المثالي في جامعة الملك سعود لعام
                                    ٢٠٠٣ </p>
                            </div>
                            <!-- /.instructor-data -->
                        </div>
                        <!-- /.intro_instructor-inner -->
                    </div>
                    <!-- /.intro-instructor -->
                    <div class="intro-lec col-md-6 col-xs-12 text-right pull-right">
                        <div class="intro_lec-inner">
                            <h1>ماذا يحتوي هذا الكورس</h1>
                            <ol>
                                <li>
                                    <i class="fa fa-play-circle"></i> مقدمة برمجية من العيار الثقيل بلاب لبا لبا
                                </li>
                                <li>
                                    <i class="fa fa-play-circle"></i> مقدمة برمجية من العيار الثقيل بلاب لبا لبا
                                </li>
                                <li>
                                    <i class="fa fa-play-circle"></i> مقدمة برمجية من العيار الثقيل بلاب لبا لبا
                                </li>
                                <li>
                                    <i class="fa fa-play-circle"></i> مقدمة برمجية من العيار الثقيل بلاب لبا لبا
                                </li>
                                <li>
                                    <i class="fa fa-play-circle"></i> مقدمة برمجية من العيار الثقيل بلاب لبا لبا
                                </li>
                            </ol>
                        </div>
                        <!-- /.intro_lec-inner -->
                    </div>
                    <!-- /.intro-lec -->
                </div>
                <!-- /.intro-extra -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-box -->
    </div>

@endsection

@push('script')
    <script src="{{ asset('assets/js/video.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        var myPlayer = videojs("example_video_1");

        $('#show-l10').click(function() {
            $('#l10').show();
            $('#example_video_1').hide();
            myPlayer.pause();
        });
    </script>

@endpush
