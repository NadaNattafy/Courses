@extends('website.layout.master')

@push('style')

@endpush

@section('title')
    <title>جميع الكورسات</title>
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

                <div id="st-trigger-effects" class="column">

                    <button data-effect="st-effect-8" class="st_show">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <header>



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
                            <div class="nav-left hidden-nav col-md-4 col-xs-12 pull-left">
                                <div class="user-logged">
                                    <ul>
                                        <li>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                class="hvr-underline-reveal">
                                                <span class="cont-img">
                                                    <img src="{{ asset('assets/images/comment-02.jpg') }}" width="35"
                                                        height="35" alt="User-Img">
                                                </span>
                                                <b>امير ناجح</b>
                                                <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                <div class="drop drop-links col-xs-12">
                                                    <div class="drop-links">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('website.profile.index') }}">
                                                                    <i class="fa fa-user"></i>&nbsp; حسابي
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('website.home.index') }}">
                                                                    <i class="fa fa-power-off"></i>&nbsp; خروج
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end drop-links -->
                                                </div>
                                                <!-- end drop -->
                                            </ul>
                                        </li>

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

    <div class="allcourses-box">
        <div class="allcourses-head text-center">
            <div class="container">
                <h1>جميع الكورسات</h1>
                <div class="nav-left nav-mobile col-md-4 col-xs-12 pull-left">
                    <div class="user-logged">
                        <ul>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal"><i
                                        class="fa fa-user"></i>
                                    <b>امير ناجح</b>

                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <div class="drop drop-links col-xs-12">
                                        <div class="drop-links">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-user"></i>&nbsp; عرض الحساب
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-cog"></i>&nbsp; تعديل الحساب
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-power-off"></i>&nbsp; خروج
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end drop-links -->
                                    </div>
                                    <!-- end drop -->
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- /.user-controls -->


                </div>
                <!-- /.nav-user -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.allcourses-head -->
        <div class="search-categories text-center">
            <div class="container">
                <div class="cat-item">
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-right">
                        <a href="#" class="show-cat">علوم الحاسب<i class="fa fa-caret-down"></i></a>
                        <div class="hidden-cat">
                            <ul>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /. cat-inner -->
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-left">
                        <form>
                            <input type="search" placeholder="ابحث عن كورسات أخري">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- /. cat-inner -->
                </div>
                <!-- /.cat-item -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.search-categories -->
        <div class="allcourses-body">
            <div class="container">
                <div class="row">
                    <div class="row block-container">
                        @foreach ($courses as $course)
                            <div class="block col-md-4 col-sm-6">
                                <figure>
                                    <div><img src="{{ url('/') . '/storage/' . $course->img }}" alt="img05"
                                            class="img-responsive">
                                    </div>
                                    <figcaption class="text-right">
                                        <h1> اسم الكورس : {{ $course->name }}</h1>
                                        <h1> اسم المدرس : {{ $course->trainer->name }}</h1>
                                        <h1> عدد الطلبة المشتركين : 5</h1>
                                        <h1> تاريخ بداية الكورس : {{ $course->created_at }}</h1>
                                        {{-- <h1> تقييم الكورس : {{ $course->review->rate }}</h1> --}}
                                        <a href="{{ route('website.courses.show', $course->id) }}">
                                            <i class="fa fa-eye"></i> مشاهدة الكورس
                                        </a>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                        <!-- /.block -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->

                <div class="inner col-xs-12 text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end inner -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.allcourses-body -->
    </div>


@endsection

@push('script')

@endpush
