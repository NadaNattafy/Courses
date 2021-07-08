@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> العلوم العصرية للتدريب | تسجيل حساب جديد </title>
@endsection

@section('content')

<div class="wrap">
    <div class="loading">
        <div class="bounceball"></div>
        <div class="text">NOW LOADING</div>
    </div>
</div>

@if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

<!-- end the loading screen -->

<div class="wrapper st-container" id="st-container">
    <!-- content push wrapper -->
    <div class="st-pusher">

        <nav class="st-menu st-effect-8" id="menu-8">
            <span class="close-nav" title="Close">
                <i class="fa fa-times"></i>
            </span>
            <h2 class="icon icon-stack">
                <img src="{{asset('assets/images/logo.png')}}" class="img-responsive">
            </h2>
            <ul>
                <li><a class="icon icon-data" href="#"><i class="fa fa-user"></i> الملف الشخصي</a></li>
                <li><a id="sd" class="icon icon-location" href="{{ route('website.profile.index') }}"><i class="fa fa-lock"></i> كلمة المرور</a></li>
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

                {{-- <div class="signup-area">
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



                    </div>
                    <!-- /.container -->
                </div> --}}
                <!-- /.login-area -->
{{--
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
                </div> --}}
                <!-- /.dividers -->
{{--
                <div class="header-nav">
                    <div class="container">
                        <div class="nav-right col-md-8 col-xs-12 pull-right">
                            <div class="logo">
                                <a href="{{ route('website.home.index') }}" title="العلوم العصرية للتدريب">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="site-logo" width="110" height="70">
                                </a>
                            </div>
                            <!-- /.logo -->
                        </div>
                        <!-- /.nav-logo -->
                        <div class="nav-left col-md-4 col-xs-12 pull-left">
                            <div class="user-controls">
                                <ul>
                                    <li>
                                        <a href="#" class="show-login">
                                            <i class="fa fa-user"></i> منطقة تسجيل الدخول
                                        </a>
                                    </li> --}}
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
            <!-- /header -->

            <div class="up-container">
                <div class="up-header text-center">
                    <div class="container">
                        <h1>يرجي تسجيل حساب جديد</h1>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.up-header -->
                <div class="up-box">
                    <div class="container">
                        <div class="up-form">
                            <form id="sign-up" action="{{ route('website.signup.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="up_form-item">
                                    <span id="error-form">من فضلك ادخل البيانات الصحيحة</span>
                                    <input type="text" placeholder="الإسم بالكامل" name="last_name">
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="text" placeholder="إسم المستخدم" name="name">
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="email" placeholder="البريد الإلكتروني" name="email">
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="password" placeholder="كلمة المرور" name="password">
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="password" placeholder="إعادة كلمة المرور" name="password">
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <input type="text" placeholder="رقم الهاتف" name="mobile">
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <select>
                                        <option>الدولة ...</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>
                                        <option>ام الدنيا</option>

                                    </select>
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item">
                                    <select>
                                        <option>الجنس</option>
{{--
                                        <label for="male">Male</label>
                                    <input type="radio" name="gender" id="male" value="male" checked>
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" id="female" value="female"> --}}
                                    <option>male</option>
                                    <option>female</option>
                                    </select>
                                </div>
                                <!-- /.up_form-item -->
                                <div class="up_form-item text-right">
                                    <label>
                                        <input type="checkbox">
                                        <span>مدرب</span>
                                        <a href="{{ route('website.trainer.index') }}" class="show-privacy">تعرف علي سياسة الخصوصية كمدرب</a>
                                    </label>
                                    <label>
                                        <input type="checkbox">
                                        <span>متدرب</span>
                                        <a href="{{ route('website.trainer.index') }}" class="show-privacy">تعرف علي سياسة الخصوصية كمتدرب</a>
                                    </label>
                                </div>
                                <!-- /.up_form-item -->



                                <div class="policy text-right">
                                    <label class="text-right policy">
                                        <input type="checkbox">
                                        <span>هل انت موافق علي سياسة الخصوصية</span>
                                    </label>
                                </div>
                                <!-- /.policy -->

                                <div class="up_form-item up-confirm">
                                    <input  onclick="document.getElementById('sign-up').submit()"type="submit" value="تسجيل">
                                </div>
                                <!-- /.up_form-item -->
                            </form>

                        </div>
                        <!-- /.up-form -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.up-box -->
            </div>
            <!-- /.up-container -->

        </div>
        <!-- /.st-content -->
    </div>
    <!-- /st-pusher -->

</div>
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>
<!-- /.toTop -->

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

@endsection

@push('script')

@endpush
