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
                <img src="{{ asset('assets/images/logo.png')}}" class="img-responsive">
            </h2>
            <ul>
                <li><a class="icon icon-data" href="#"><i class="fa fa-user"></i> الملف الشخصي</a></li>
                <li><a id="sd" class="icon icon-location" href="profile1.html#password"><i class="fa fa-lock"></i> كلمة المرور</a></li>
                <li><a class="icon icon-study" href="#"><i class="fa fa-database"></i> الدورات</a></li>
                <li><a class="icon icon-photo" href="#">Collections</a></li>
                <li><a class="icon icon-wallet" href="#">Credits</a></li>
                <li><a class="icon icon-data" href="#">Data Management</a></li>
                <li><a class="icon icon-location" href="#">Location</a></li>
                <li><a class="icon icon-study" href="#">Study</a></li>
                <li><a class="icon icon-photo" href="#">Collections</a></li>
                <li><a class="icon icon-wallet" href="#">Credits</a></li>
                <li><a class="icon icon-data" href="#">Data Management</a></li>
                <li><a class="icon icon-location" href="#">Location</a></li>
                <li><a class="icon icon-study" href="#">Study</a></li>
                <li><a class="icon icon-photo" href="#">Collections</a></li>
                <li><a class="icon icon-wallet" href="#">Credits</a></li>
                <li><a class="icon icon-data" href="#">Data Management</a></li>
                <li><a class="icon icon-location" href="#">Location</a></li>
                <li><a class="icon icon-study" href="#">Study</a></li>
                <li><a class="icon icon-photo" href="#">Collections</a></li>
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

                <div class="login-area">
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
                            <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                            <a href="#">
                                <i class="fa fa-user-plus"></i> تسجيل عضوية
                            </a>
                        </div>
                        <!-- /.signup-form -->



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
                                    @guest
                                        <li>
                                            <a href="{{ route('trainer.trainerlogin.index') }}" class="show-login">
                                                <i class="fa fa-user"></i> منطثة تسجيل االمدرب
                                            </a>
                                        </li>
                                    @endguest
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

                                    @auth
                                        <li>
                                            {{-- <a href="#"> --}}
                                            <a href="{{ route('website.logout.trainer') }}" onclick="event.preventDefault(); document.getElementById('logout_form').submit()">
                                                <i class="fa fa-user"></i> منطقة تسجيل خروج
                                                <form id="logout_form" action="{{ route('website.logout.trainer') }}" method="POST"
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
                <img src="{{asset('assets/images/3lom.jpg')}}" class="img-responsive" alt="">
            </div>
            <!-- end about-img -->
            <div class="about-data col-md-8 col-xs-12 pull-right text-right">
                <p>
                    هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت.


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
