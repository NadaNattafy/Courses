@extends('website.layout.master')

@push('style')

@endpush

@section('title')
    <title> الموقع </title>
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper">
        <header>
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
                    <div class="nav-right user_nav-right col-md-6 col-xs-12 pull-right">

                        <div class="logo">
                            <a href="{{ route('website.home.index') }}" title="العلوم العصرية للتدريب">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="site-logo" width="110" height="70">
                            </a>
                        </div>
                        <!-- /.logo -->
                    </div>
                    <!-- /.nav-logo -->
                    <div class="nav-left user_nav-left col-md-6 col-xs-12 pull-left">
                        <div class="user-logged">
                            <ul>
                                <li>
                                    @if (auth('web')->check() || auth('trainer')->check())
                                        @auth('web')
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                class="hvr-underline-reveal">
                                                <span class="cont-img">
                                                    <img src="{{ url('/') . '/storage/' . $users->img }}" width="35"
                                                        height="35" alt="User-Img">
                                                </span>
                                                <b>{{ $users->name }}</b>
                                                <i class="fa fa-caret-down"></i>
                                            @else
                                                @auth('trainer')
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                        class="hvr-underline-reveal">
                                                        <span class="cont-img">
                                                            <img src="{{ url('/') . '/storage/' . $trainers->img }}" width="35"
                                                                height="35" alt="User-Img">
                                                        </span>
                                                        <b>{{ $trainers->name }}</b>
                                                        <i class="fa fa-caret-down"></i>
                                                    </a>
                                                @endauth
                                        @endif
                                    @endauth
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
                                <li>
                                    <a href="#" class="show-user_search">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="show-notification" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bell"></i>
                                    </a>
                                    <ul class="dropdown-menu notification-box" role="menu" aria-labelledby="dropdownMenu">
                                        <div class="drop drop-links col-xs-12">
                                            <ul>
                                                @foreach ($remarks as $remark)
                                                    <li>
                                                        @if (auth('web')->check() || auth('trainer')->check())
                                                            @auth('web')
                                                                <a href="#">
                                                                    <img src="{{ url('/') . '/storage/' . $users->img }}"
                                                                        alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        {{ $remark->title }}
                                                                        <small><i
                                                                                class="fa fa-clock-o"></i>{{ $remark->created_at }}</small>
                                                                    </h4>
                                                                    <p> {{ $remark->body }} </p>
                                                                </a>
                                                            @else
                                                                @auth('trainer')
                                                                    <a href="#">
                                                                        <img src="{{ url('/') . '/storage/' . $trainers->img }}"
                                                                            alt="" class="img-circle pull-right">
                                                                        <h4>
                                                                            {{ $remark->title }}
                                                                            <small><i
                                                                                    class="fa fa-clock-o"></i>{{ $remark->created_at }}</small>
                                                                        </h4>
                                                                        <p> {{ $remark->body }} </p>
                                                                    </a>
                                                                @endauth
                                                            @endif
                                                        @endauth
                                                    </li>
                                                @endforeach
                                            </ul>
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
            </div>
        </header>
    </div>
    <!-- /.container -->
    <div class="input-container user-search col-md-12 col-xs-12 input-lft">
        <div class="container">
            <input type="text" placeholder="ابحث عن جميع الكورسات من هنا">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.input-container -->
    </div>
    <!-- end the loading screen -->

    <div class="wrapper">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="profile-content empty-course">
            <div class="container">
                <div class="right_tap-box col-md-3 col-xs-12 hidden-xs hidden-sm pull-right">
                    <div class="right_box-inner">
                        <!-- Nav tabs -->
                        <a class="toggle-slidenav hidden-xs hidden-sm">
                            <i class="fa fa-close"></i>
                        </a>
                        <ul class="nav nav-tabs" role="tablist">
                            @if (auth('web')->check() || auth('trainer')->check())
                                @auth
                                    <li role="presentation">
                                        <a href="#all-courses" aria-controls="all-courses" role="tab" data-toggle="tab">
                                            <i class="fa fa-eye"></i> تصفح الدورات
                                        </a>
                                    </li>
                                @endauth
                                @auth('trainer')
                                    <li role="presentation" class="active">

                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                            <i class="fa fa-user"></i> الملف الشخصي
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#password" aria-controls="password" role="tab" data-toggle="tab">
                                            <i class="fa fa-lock"></i> كلمة المرور
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">
                                            <i class="fa fa-database"></i> الدورات
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#interests" aria-controls="interests" role="tab" data-toggle="tab">
                                            <i class="fa fa-diamond"></i> الاهتمامات
                                        </a>
                                    </li>

                                    <li role="presentation">
                                        <a href="#cv" aria-controls="cv" role="tab" data-toggle="tab">
                                            <i class="fa fa-file-text-o"></i> السيرة الذاتية
                                        </a>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                    <!-- /.right_box-inner -->
                </div>
                <!-- /.right_tap-box -->

                <div class="mobile_tap-box col-md-12 col-xs-12 hidden-lg text-center">
                    <div class="right_box-inner">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">

                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="الملف الشخصي">
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#password" aria-controls="password" role="tab" data-toggle="tab"
                                    title="كلمة المرور">
                                    <i class="fa fa-lock"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab" title="الدورات">
                                    <i class="fa fa-database"></i>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#interests" aria-controls="interests" role="tab" data-toggle="tab"
                                    title="الاهتمامات">
                                    <i class="fa fa-diamond"></i>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#cv" aria-controls="cv" role="tab" data-toggle="tab" title="السيرة الذاتية">
                                    <i class="fa fa-file-text-o"></i>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#all-courses" aria-controls="all-courses" role="tab" data-toggle="tab"
                                    title="تصفح الدورات">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </li>

                            <li role="presentation">
                                <a href="#my_courses" aria-controls="my_courses" role="tab" data-toggle="tab"
                                    title="دوراتي كمتدرب">
                                    <i class="fa fa-folder-open-o"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.right_box-inner -->
                </div>
                <!-- /.mobile_tap-box -->

                <div class="left_tap-box col-md-9 col-xs-12 pull-left">
                    <div class="left_box-inner">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in  active" id="home">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-user"></i>
                                        الملف الشخصي
                                        <a class="edit-personal">
                                            <i class="fa fa-cog"></i>
                                            تعديل البيانات
                                        </a>
                                        <button class="cancel-personal" type="reset">
                                            <i class="fa fa-times"></i>
                                            إلغاء التعديل
                                        </button>
                                    </h1>
                                </div>
                                <!-- /.home-head -->

                                <div class="home_img  text-center">
                                    <div class="home_img-inner">
                                        <div class="left-caption col-xs-12">
                                            <div class="imgcontent col-xs-12">
                                                <div class="bstext">
                                                    <span>
                                                        <i class="fa fa-camera"></i><br>
                                                        Upload an image
                                                    </span>
                                                </div>
                                                <!-- /.bstext -->
                                                <output id="list"></output>
                                                <input type="file" id="show-adj8" name="myFileSelect">
                                            </div>
                                            <!-- /.imgcontent -->
                                        </div>
                                        <!-- /.Fption -->
                                        @if (auth('web')->check() || auth('trainer')->check())
                                            @auth('web')
                                                <img src="{{ url('/') . '/storage/' . $users->img }}" alt="" width="150"
                                                    height="150">
                                            @else
                                                @auth('trainer')
                                                    <img src="{{ url('/') . '/storage/' . $trainers->img }}" alt="" width="150"
                                                        height="150">
                                                @endauth
                                            @endif
                                        @endauth
                                    </div>
                                </div>
                                <!-- /.home_img -->
                                <div class="home-content">
                                    @auth('trainer')
                                        <div class="home_data col-md-10 col-sm-10 col-xs-12 text-right">
                                            <form action="#" method="get">


                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-user-secret"></i>
                                                        <h1>الإسم بالكامل</h1>
                                                        <input type="text" id="edit-area" placeholder="الإسم بالكامل">
                                                        <span>{{ $trainers->name }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->

                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-user"></i>
                                                        <h1>إسم المستخدم</h1>
                                                        <input type="text" id="edit-area" placeholder="إسم المستخدم">
                                                        <span>{{ $trainers->name }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->
                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-phone"></i>
                                                        <h1>رقم الهاتف</h1>
                                                        <input type="text" id="edit-area" placeholder="رقم الهاتف">
                                                        <span>{{ $trainers->mobile }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->

                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-envelope"></i>
                                                        <h1>البريد الإلكتروني</h1>
                                                        <input type="email" id="edit-area" placeholder="البريد الإلكتروني">
                                                        <span>{{ $trainers->email }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->
                                                <div class="home_data-item col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-globe"></i>
                                                        <h1>الدولة</h1>
                                                        <input type="text" id="edit-area" placeholder="الدولة">
                                                        <span>{{ $trainers->state }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->
                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-male"></i>
                                                        <h1>الجنس</h1>

                                                        <span>{{ $trainers->gender }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->
                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-globe"></i>
                                                        <h1>مدرب </h1>
                                                        <input type="text" id="edit-area" placeholder="مدرب ">
                                                        <span>مدرب</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->

                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-graduation-cap"></i>
                                                        <h1> المؤهل</h1>
                                                        <input type="text" id="edit-area" placeholder="المؤهل">
                                                        <span>{{ $trainers->qualified }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->

                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-briefcase"></i>
                                                        <h1>التخصص</h1>
                                                        <input type="text" id="edit-area" placeholder="التخصص">
                                                        <span>{{ $trainers->specialty }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->

                                                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                                                    <div>
                                                        <i class="fa fa-cogs"></i>
                                                        <h1>مجال العمل</h1>
                                                        <select id="edit-area">
                                                            <option>هندسة هندسة</option>
                                                            <option>هندسة هندسة</option>
                                                            <option>هندسة هندسة</option>
                                                            <option>هندسة هندسة</option>
                                                        </select>
                                                        <span>{{ $trainers->field }}</span>
                                                    </div>
                                                </div>
                                                <!-- /.home_data-item -->

                                                <div class="home_data-item all-set col-md-12 col-sm-12  col-xs-12 pull-right">
                                                    <input type="submit" class="confirm-set" value="حفظ التعديلات">
                                                </div>
                                                <!-- /.home_data-item -->
                                            </form>
                                        </div>
                                        <!-- ./home_data -->
                                    </div>
                                    <!-- /.home-content -->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="password">
                                    <div class="home-head">
                                        <h1>
                                            <i class="fa fa-lock"></i>
                                            كلمة المرور
                                        </h1>
                                        <a class="edit-password">
                                            <i class="fa fa-cog"></i> تعديل البيانات
                                        </a>
                                        <button class="cancel-password" type="reset">
                                            <i class="fa fa-times"></i> إلغاء التعديل
                                        </button>
                                    </div>
                                    <!-- /.home-head -->
                                    <div class="home-content pass-content col-xs-12">
                                        <div class="home_data col-xs-12 pull-right text-right">
                                            <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                                <form id="new-pass"
                                                    action="{{ route('trainer.trainer.update', $trainers->id) }}"
                                                    method="POST">
                                                    {{ method_field('PUT') }}
                                                    @csrf
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-unlock"></i>
                                                    <h1>كلمة المرور الجديدة</h1>
                                                    <input type="text" class="form-control" name="password"
                                                        placeholder="كلمة المرور الجديدة">

                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->

                                            <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                                                <div>
                                                    <i class="fa fa-lock"></i>
                                                    <h1>إعادة كتابة كلمة المرور الجديدة</h1>
                                                    <input type="text" class="form-control" name="password_confirmation"
                                                        placeholder="إعادة كتابة كلمة المرور الجديدة">

                                                </div>
                                            </div>
                                            <!-- /.home_data-item -->
                                            <div class="home_data-item all-pass col-md-12 col-sm-12  col-xs-12 pull-right">
                                                <input type="submit" id="new-pass" value="حفظ التعديلات"
                                                    class="confirm-set-password">
                                            </div>

                                            </form>
                                            <!-- /.home_data-item -->
                                        </div>
                                    @endauth
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="courses">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-database"></i>
                                        الدورات
                                    </h1>
                                    <a class="add1_course" href="#">
                                        <i class="fa fa-plus"></i>إضافة دورة
                                    </a>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content  pass-content col-xs-12">
                                    <div class="home_data col-md-12 pull-right text-right">
                                        <div class="shop-wrapper col-xs-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingOne"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    @foreach ($courses as $course)
                                                                        <i class="fa fa-group"></i>
                                                                    @endforeach
                                                                </h5>
                                                                {{ $course->name }}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="instructor-control text-center">

                                                                <a href="#" class="delete-course">
                                                                    <i class="fa fa-trash"></i> حذف الدورة
                                                                </a>
                                                                <a href="#" class="add-course" data-toggle="modal"
                                                                    data-target="#lesson">
                                                                    <i class="fa fa-plus"></i> إضافة محاضرة
                                                                </a>
                                                                <a href="#" class="message-course" data-toggle="modal"
                                                                    data-target="#msg-all">
                                                                    <i class="fa fa-envelope"></i> إرسال للجميع
                                                                </a>
                                                                <!-- =========================================================================================================================================== -->
                                                                {{-- <div class="panel-pop modal" id="msg-all">
                                                                    <div class="lost-inner">
                                                                        <h1>
                                                                            <i class="fa fa-envelope"></i>
                                                                            إرسال لجميع الطلاب المشتركين في الدورة
                                                                        </h1>

                                                                        <form id="send-message"
                                                                            action="{{ route('website.messages.store') }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="lost-item" id="messageTo">
                                                                                <textarea placeholder="اكتب الرسالة هنا"
                                                                                    name="message"></textarea>
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="text-center">
                                                                                <span>
                                                                                    <input
                                                                                        onclick="document.getElementById('send-message').submit()"
                                                                                        type="submit" value="إرسال">
                                                                                </span>
                                                                            </div>
                                                                        </form>
                                                                        <!-- /.lost-item -->
                                                                    </div>
                                                                    <!-- /.lost-inner -->
                                                                </div>
                                                                <!-- /.modal --> --}}
                                                                <!-- Modal -->
                                                                <form id="send-message"
                                                                    action="{{ route('website.messages.store') }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal fade" id="msg-all" tabindex="-1"
                                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel">ارسال لجميع
                                                                                        الطلاب المشتركين في الدورة</h5>
                                                                                    <button type="button" class="close"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <span
                                                                                            aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="lost-item" id="messageTo">
                                                                                    <textarea placeholder="اكتب الرسالة هنا"
                                                                                        name="message"></textarea>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <span>
                                                                                        <input onclick type="submit"
                                                                                            value="إرسال">
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                                <!-- =========================================================================================================================================== -->
                                                                <a href="{{ route('website.profile.edit', $course->id) }}"
                                                                    class="edit-course">
                                                                    <i class="fa fa-pencil"></i> تعديل الدورة
                                                                </a>
                                                                <a href="#" class="add-alert-form">
                                                                    <i class="fa fa-bullhorn"></i> إضافة تنويه
                                                                </a>

                                                                <!-- =========================================================================================================================================== -->

                                                                <div class="panel-pop modal" id="alert-all">
                                                                    <div class="lost-inner">
                                                                        <h1>
                                                                            <i class="fa fa-envelope"></i>
                                                                            اضافة تنويه للطلاب المشتركين في الدورة
                                                                        </h1>

                                                                        <form id="add-remark"
                                                                            action="{{ route('website.remarks.store') }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf

                                                                            <div class="lost-item" id="alert-item">
                                                                                <input type="text" name="title"
                                                                                    placeholder="عنوان التنويه">
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="lost-item" id="alert-item">
                                                                                <textarea placeholder="مضمون التنويه"
                                                                                    name="body"></textarea>
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="text-center">
                                                                                <span>
                                                                                    <input
                                                                                        onclick="document.getElementById('add-remark').submit()"
                                                                                        type="submit" value="نشر التنويه">
                                                                                </span>
                                                                            </div>

                                                                        </form>
                                                                        <!-- /.lost-item -->
                                                                    </div>
                                                                    <!-- /.lost-inner -->
                                                                </div>
                                                                <!-- /.modal -->

                                                                <!-- =========================================================================================================================================== -->
                                                                <div class="add_lecture">
                                                                    <form class="add-lesson"
                                                                        action="{{ route('website.lessons.store') }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        {{-- <input type="hidden" name="course_id" value={{ $course->id }}> --}}
                                                                        <div class="modal fade" id="lesson" tabindex="-1"
                                                                            role="dialog"
                                                                            aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <div class="lecture-item">
                                                                                            <h1 class="modal-title"
                                                                                                id="exampleModalLabel">اسم
                                                                                                الدرس</h1>
                                                                                            <input type="text"
                                                                                                placeholder="اضف اسم المحاضرة"
                                                                                                name="name">
                                                                                        </div>
                                                                                        <!-- /.lecture-item -->
                                                                                        <div class="lecture-item">
                                                                                            <h1 class="modal-title"
                                                                                                id="exampleModalLabel">اضف
                                                                                                رابط خارجي للفيديو</h1>
                                                                                            <div
                                                                                                class="add_cont text-right">
                                                                                                {{-- <label class="text-right">
                                                                                    <input type="checkbox" id="up-video" name="url">
                                                                                    <span>اذا أردت رفع فيديو من جهازك
                                                                                        الشخصي</span>
                                                                                </label> --}}

                                                                                                <div
                                                                                                    class="videoUploaded col-xs-12 text-right">
                                                                                                    {{-- <span><i class="fa fa-video-camera"></i>
                                                                                        ارفع فيديو من جهازك</span>
                                                                                    <input type="file" class="uploaded"> --}}
                                                                                                </div>
                                                                                                <!--
                                                                                                                            <label class="text-right">
                                                                                                                                <input type="radio" id="add-link">
                                                                                                                                <span>يوتيوب</span>
                                                                                                                            </label>
                                                -->
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                placeholder="ادخل رابط فيديو"
                                                                                                name="url" class="linked">
                                                                                        </div>
                                                                                        <!-- /.lecture-item -->
                                                                                        <div class="lecture-item">
                                                                                            <h1 class="modal-title"
                                                                                                id="exampleModalLabel">اسم
                                                                                                الدرس</h1>
                                                                                            <textarea
                                                                                                placeholder="اضف وصف المحاضرة"
                                                                                                name="description"></textarea>
                                                                                        </div>
                                                                                        <!-- /.lecture-item -->
                                                                                        <div
                                                                                            class="lecture-item text-right">
                                                                                            <div
                                                                                                class="fileUpload col-xs-12 text-right">
                                                                                                <label
                                                                                                    for="exampleFormControlFile1">رابط
                                                                                                    أوراق العمل</label>
                                                                                                <input type="file"
                                                                                                    class="form-control-file"
                                                                                                    name="file">
                                                                                            </div>
                                                                                            <span class="hint"> Image او
                                                                                                Word او Powerpoint
                                                                                                او Pdf الملفات يمكن ان تكون
                                                                                            </span>
                                                                                        </div>

                                                                                        <div class="modal-footer">
                                                                                            <span>
                                                                                                <input onclick type="submit"
                                                                                                    value="إضافة محاضرة">
                                                                                            </span>
                                                                                        </div>
                                                                                        <!-- /.lecture-item -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <!-- /.add_lecture -->
                                                            </div>
                                                            <!-- /.instructor-control -->
                                                            <ul>
                                                                @foreach ($lessons as $lesson)
                                                                    <li>
                                                                        <h1 class="modal-title" id="exampleModalLabel">
                                                                            <label>الوصف</label>
                                                                            <span class="par">
                                                                                {{ $lesson->description }}
                                                                            </span>
                                                                        </h1>
                                                                    </li>
                                                                    <li>
                                                                        <h1>
                                                                            <label>التاريخ</label>
                                                                            <span>{{ $lesson->created_at }}</span>
                                                                        </h1>
                                                                    </li>
                                                                @endforeach
                                                            </ul>

                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingTwo"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed">
                                                                <h5>
                                                                    <i class="fa fa-group"></i> 7
                                                                </h5>
                                                                Build Responsive Real World Websites with HTML5 and CSS3
                                                            </a>

                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            <div class="instructor-control text-center">

                                                                <a href="#" class="delete-course">
                                                                    <i class="fa fa-trash"></i> حذف الدورة
                                                                </a>
                                                                <form
                                                                    action="{{ route('website.profile.destroy', $course->id) }}"
                                                                    method="POST">

                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>

                                                                <a href="#" class="add-course">
                                                                    <i class="fa fa-plus"></i> إضافة محاضرة
                                                                </a>
                                                                <a href="#" class="message-course">
                                                                    <i class="fa fa-envelope"></i> إرسال للجميع
                                                                </a>
                                                                <!-- =========================================================================================================================================== -->

                                                                <div class="panel-pop modal" id="msg-all">
                                                                    <div class="lost-inner">
                                                                        <h1>
                                                                            <i class="fa fa-envelope"></i>
                                                                            إرسال لجميع الطلاب المشتركين في الدورة
                                                                        </h1>

                                                                        <form id="send-message"
                                                                            action="{{ route('website.messages.store') }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="lost-item" id="messageTo">
                                                                                <textarea placeholder="اكتب الرسالة هنا"
                                                                                    name="message"></textarea>
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="text-center">
                                                                                <span>
                                                                                    <input
                                                                                        onclick="document.getElementById('send-message').submit()"
                                                                                        type="submit" value="إرسال">
                                                                                </span>
                                                                            </div>
                                                                        </form>
                                                                        <!-- /.lost-item -->
                                                                    </div>
                                                                    <!-- /.lost-inner -->
                                                                </div>
                                                                <!-- /.modal -->

                                                                <!-- =========================================================================================================================================== -->
                                                                <a href="#" class="edit-course">
                                                                    <i class="fa fa-pencil"></i> تعديل الدورة
                                                                </a>
                                                                <a href="#" class="add-alert-form">
                                                                    <i class="fa fa-bullhorn"></i> إضافة تنويه
                                                                </a>

                                                                <!-- =========================================================================================================================================== -->

                                                                <div class="panel-pop modal" id="alert-all">
                                                                    <div class="lost-inner">
                                                                        <h1>
                                                                            <i class="fa fa-envelope"></i>
                                                                            اضافة تنويه للطلاب المشتركين في الدورة
                                                                        </h1>

                                                                        <form id="add-remark"
                                                                            action="{{ route('website.remarks.store') }}"
                                                                            method="POST" enctype="multipart/form-data">
                                                                            @csrf

                                                                            <div class="lost-item" id="alert-item">
                                                                                <input type="text" name="title"
                                                                                    placeholder="عنوان التنويه">
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="lost-item" id="alert-item">
                                                                                <textarea placeholder="مضمون التنويه"
                                                                                    name="body"></textarea>
                                                                            </div>
                                                                            <!-- /.lost-item -->
                                                                            <div class="text-center">
                                                                                <span>
                                                                                    <input
                                                                                        onclick="document.getElementById('add-remark').submit()"
                                                                                        type="submit" value="نشر التنويه">
                                                                                </span>
                                                                            </div>

                                                                        </form>
                                                                        <!-- /.lost-item -->
                                                                    </div>
                                                                    <!-- /.lost-inner -->
                                                                </div>
                                                                <!-- /.modal -->

                                                                <!-- =========================================================================================================================================== -->
                                                                <div class="add_lecture">
                                                                    <form class="add-lesson"
                                                                        action="{{ route('website.lessons.store') }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="lecture-item">
                                                                            <h1>اسم الدرس</h1>
                                                                            <input type="text"
                                                                                placeholder="اضف اسم المحاضرة" name="name">
                                                                        </div>
                                                                        <!-- /.lecture-item -->
                                                                        <div class="lecture-item">
                                                                            <h1>اضف رابط خارجي للفيديو</h1>
                                                                            <div class="add_cont text-right">
                                                                                <label class="text-right">
                                                                                    <input type="checkbox" id="up-video"
                                                                                        name="url">
                                                                                    <span>اذا أردت رفع فيديو من جهازك
                                                                                        الشخصي</span>
                                                                                </label>

                                                                                <div
                                                                                    class="videoUploaded col-xs-12 text-right">
                                                                                    <span><i class="fa fa-video-camera"></i>
                                                                                        ارفع فيديو من جهازك</span>
                                                                                    <input type="file" class="uploaded">
                                                                                </div>
                                                                                <!--
                                                                                                                            <label class="text-right">
                                                                                                                                <input type="radio" id="add-link">
                                                                                                                                <span>يوتيوب</span>
                                                                                                                            </label>
                                                -->
                                                                            </div>
                                                                            <input type="text" placeholder="ادخل رابط فيديو"
                                                                                name="url" class="linked">
                                                                        </div>
                                                                        <!-- /.lecture-item -->
                                                                        <div class="lecture-item">
                                                                            <h1>اسم الدرس</h1>
                                                                            <textarea placeholder="اضف وصف المحاضرة"
                                                                                name="description"></textarea>
                                                                        </div>
                                                                        <!-- /.lecture-item -->
                                                                        {{-- <div class="lecture-item text-right">
                                                                            <div class="fileUpload col-xs-12 text-right">
                                                                                <span><i class="fa fa-file"></i> رابط أوراق
                                                                                    العمل </span>
                                                                                <input type="file" class="upload">
                                                                            </div>
                                                                            <span class="hint"> Image او Word او Powerpoint
                                                                                او Pdf الملفات يمكن ان تكون </span>
                                                                        </div> --}}
                                                                        <!-- /.lecture-item -->
                                                                        {{-- <div class="lecture-item add-sorting">
                                                                            <label>
                                                                                <input type="checkbox" id="sort-lesson">
                                                                                <span>يجب تحديد ترتيب الدرس </span>
                                                                                <input type="number" data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="اكتب ترتيب الدرس بالأرقام"
                                                                                    class="add_sort-number">
                                                                            </label>
                                                                        </div> --}}
                                                                        <!-- /.lecture-item -->
                                                                        <div class="lecture-item confirm-lec">
                                                                            <input
                                                                                onclick="document.getElementById('add-lesson').submit()"
                                                                                type="submit" value="إضافة محاضرة">
                                                                        </div>
                                                                        <!-- /.lecture-item -->
                                                                    </form>
                                                                </div>
                                                                <!-- /.add_lecture -->
                                                            </div>
                                                            <!-- /.instructor-control -->
                                                            <ul>
                                                                <li>
                                                                    <h1>
                                                                        <label>الوصف</label>
                                                                        <span class="par"><span class="par">
                                                                                هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى
                                                                                المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                                                الشكل الخارجي للنص أو شكل توضع الفقرات في
                                                                                الصفحة التي يقرأها. ولذلك يتم استخدام طريقة
                                                                                لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى
                                                                                حد ما- للأحرف عوضاً عن استخدام "هنا يوجد
                                                                                محتوى نصي، </span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>المجال</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>

                                                                <li>
                                                                    <h1>
                                                                        <label>عدد المشتركين في الدورة</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>الحالة</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>نشرت / لم تنشر</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>الشهادة</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>السعر</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>التاريخ</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>السعر</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                                <li>
                                                                    <h1>
                                                                        <label>إسم المدرب</label>
                                                                        <span>برمجة وعلوم</span>
                                                                    </h1>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.panel-group -->


                                        </div>
                                        <!-- end shop-wrapper -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="cv">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-file"></i>
                                        أضف ملف سيرتك الذاتية
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                            <div>
                                                <form class="cv-file" action="{{ route('website.cvs.store') }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <h1>أضف رابط خارجي لملف السيرة الذاتية</h1>
                                                    <input type="url" placeholder="رابط خارجي" name="url">
                                                    <h1>او يمكنك كتابتها بنفسك من خلال</h1>
                                                    <textarea placeholder="اكتب سيرتك الذاتية" name="cv"></textarea>
                                                    <input onclick="document.getElementById('cv-file').submit()"
                                                        type="submit" value="حفظ">
                                                    <a class="show-cv">عرض ملف السيرة الذاتية</a>
                                                </form>
                                            </div>
                                            <div class="cv-container text-center">
                                                <p>Enthusiastically deliver global information whereas empowered
                                                    methodologies. Completely supply transparent web services vis-a-vis
                                                    global internal or "organic" sources. Globally administrate long-term
                                                    high-impact ROI before intermandated.</p>
                                                <a href="#">
                                                    <i class="fa fa-cloud-download"></i> تحميل ملف السيرة الذاتية
                                                </a>
                                            </div>
                                            <!-- /.cv-container -->
                                        </div>
                                        <!-- /.home_data-item -->



                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="interests">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-diamond"></i>
                                        الاهتمامات
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="interest-show">

                                            <ul>
                                                @foreach ($interests as $interest)
                                                    <li>
                                                        <span class="inter-item">{{ $interest->name }}
                                                            <i class="fa fa-times" id="del-item"></i>
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- /.interest-show -->
                                        <div class="add-interest">
                                            <a>
                                                <i class="fa fa-plus"></i> أضف اهتمامات أخري
                                            </a>
                                        </div>
                                        <!-- /.add-interest -->
                                        <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                            <div class="interest-cont col-xs-12">
                                                <form action="{{ route('website.trainerinterests.store') }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="interest-item col-md-4 col-sm-4 col-xs-6">
                                                        <label>
                                                            @foreach ($interests as $interest)
                                                                <input type="checkbox" value="{{ $interest->id }}"
                                                                    name="interests[]">
                                                                <label
                                                                    for="{{ $interest->id }}">{{ $interest->name }}</label>
                                                            @endforeach
                                                        </label>
                                                    </div>

                                                    <!-- /.interest-item -->
                                            </div>
                                            <!-- /.interest-cont -->
                                            <div class="interst-gender col-xs-12">
                                                <h1>نوع الدورات التي تفضل متابعتها </h1>
                                                <div class="add_cont text-right">

                                                    <label for="male">ذكور</label>
                                                    <input type="radio" name="gender" id="male" value="male" checked>
                                                    <label for="female">اناث</label>
                                                    <input type="radio" name="gender" id="female" value="female">
                                                </div>
                                                <div class="cv-file text-left">
                                                    <input type="submit" value="حفظ">
                                                </div>
                                                </form>
                                            </div>
                                            <!-- /.interest-gender -->
                                        </div>
                                        <!-- /.home_data-item -->
                                    </div>
                                    <!-- ./home_data -->
                                </div>
                                <!-- /.home-content -->
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="all-courses">
                                <div class="home-head">
                                    <h1>
                                        <i class="fa fa-eye"></i>
                                        جميع الدورات
                                    </h1>
                                </div>
                                <!-- /.home-head -->
                                <div class="home-content pass-content col-xs-12">
                                    <div class="home_data col-xs-12 pull-right text-right">
                                        <div class="my_courses-container">
                                            <div>
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active"><a href="#current"
                                                            aria-controls="current" role="tab" data-toggle="tab">الدورات
                                                            الحالية</a></li>
                                                </ul>
                                                @foreach ($courses as $course)
                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane fade in active" id="current">
                                                            <div class="type col-xs-12">
                                                                <div class="filtered-head text-right">
                                                                    <h1>
                                                                        <i class="fa fa-tags"></i>
                                                                        {{ $course->name }}
                                                                    </h1>
                                                                </div>
                                                                <!-- /.filtered-head -->
                                                                <div class="card col-md-6 col-xs-12 pull-right">
                                                                    <div class="card-inner">
                                                                        <span
                                                                            class="corse-type">{{ $course->trainer->field }}</span>
                                                                        <div class="card-img">

                                                                            <img src="{{ url('/') . '/storage/' . $course->img }}"
                                                                                alt="img05" class="img-responsive">
                                                                            <div class="lessons-number text-center">
                                                                                <h1>
                                                                                    <i class="fa fa-play-circle"></i>
                                                                                    {{ $course->lesson->count() }}
                                                                                </h1>
                                                                            </div>
                                                                            <!-- /.lessons-number -->
                                                                        </div>
                                                                        <!-- /.card-img -->
                                                                        <div class="card-data">
                                                                            <div class="course_name text-right">
                                                                                <h1>
                                                                                    <a href="#">{{ $course->name }} </a>
                                                                                </h1>
                                                                            </div>
                                                                            <!-- /.course-name -->
                                                                            <div class="course_setting text-right">
                                                                                <span class="course_date">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                    {{ $course->created_at }}
                                                                                </span>
                                                                            </div>
                                                                            <!-- /.course_setting -->
                                                                            <div class="course_instructor-data">
                                                                                <span>
                                                                                    <img src="{{ url('/') . '/storage/' . $course->img }}"
                                                                                        alt="img05" width="70" height="70"
                                                                                        class="img-responsive">
                                                                                </span>
                                                                                <a href="#">
                                                                                    <i class="fa fa-user"></i>
                                                                                    {{ $course->trainer->name }}
                                                                                </a>
                                                                            </div>
                                                                            <!-- /.course_instructor-data -->
                                                                        </div>
                                                                        <!-- /.card-data -->

                                                                    </div>
                                                                    <!-- /.card-inner -->
                                                                </div>
                                                @endforeach
                                                <!-- /.card -->

                                            </div>
                                            <!-- /.type -->
                                        </div>
                                        <!-- /#current -->
                                        <div role="tabpanel" class="tab-pane fade" id="comming">
                                            <div class="flash_empty text-center">
                                                <h1 class="animated shake">
                                                    <i class="fa fa-frown-o"></i>
                                                    عفواً لا يوجد لديك دورات في هذا القسم
                                                </h1>
                                            </div>
                                            <!-- /.flash_empty -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.my_courses-container -->
                        </div>
                        <!-- ./home_data -->
                    </div>
                    <!-- /.home-content -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="my_courses">
                    <div class="home-head">
                        <h1>
                            <i class="fa fa-folder-open-o"></i>
                            دوراتي
                        </h1>
                    </div>
                    <!-- /.home-head -->
                    <div class="home-content pass-content col-xs-12">
                        <div class="home_data col-xs-12 pull-right text-right">
                            <div class="my_courses-container">
                                <div>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#currentmy" aria-controls="current"
                                                role="tab" data-toggle="tab">الدورات
                                                الحالية</a></li>
                                        <li role="presentation"><a href="#commingmy" aria-controls="comming" role="tab"
                                                data-toggle="tab">الدورات القادمة</a></li>
                                        <li role="presentation"><a href="#finishedmy" aria-controls="comming" role="tab"
                                                data-toggle="tab">الدورات المنتهية</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="currentmy">
                                            <div class="type col-xs-12">
                                                <div class="filtered-head text-right">
                                                    <h1>
                                                        <i class="fa fa-tags"></i>
                                                        تنمية بشرية
                                                    </h1>
                                                </div>
                                                <!-- /.filtered-head -->
                                                <div class="card col-md-6 col-xs-12 pull-right">
                                                    <div class="card-inner">
                                                        <span class="corse-type">الالهام</span>
                                                        <div class="card-img">

                                                            <img src="{{ asset('assets/images/bg-4.jpg') }}" alt=""
                                                                class="img-responsive">
                                                            <div class="lessons-number text-center">
                                                                <h1>
                                                                    <i class="fa fa-play-circle"></i>
                                                                    100
                                                                </h1>
                                                            </div>
                                                            <!-- /.lessons-number -->
                                                        </div>
                                                        <!-- /.card-img -->
                                                        <div class="card-data">
                                                            <div class="course_name text-right">
                                                                <h1>
                                                                    <a href="#">البرمجة بدون كود </a>
                                                                </h1>
                                                            </div>
                                                            <!-- /.course-name -->
                                                            <div class="course_setting text-right">
                                                                <span class="course_date">
                                                                    <i class="fa fa-calendar"></i>
                                                                    من 01 فبراير 2016 إلى 30 مايو 2016
                                                                </span>
                                                            </div>
                                                            <!-- /.course_setting -->
                                                            <div class="course_instructor-data">
                                                                <span>
                                                                    <img src="{{ asset('assets/images/s.png') }}"
                                                                        width="70" height="70" class="img-responsive">
                                                                </span>
                                                                <a href="#">
                                                                    <i class="fa fa-user"></i> أمير ناجح الدسوقي
                                                                </a>
                                                            </div>
                                                            <!-- /.course_instructor-data -->
                                                            <div class="corse-action">
                                                                <a href="#" class="gonna-corse">
                                                                    <i class="fa fa-paper-plane"></i> إذهب الي
                                                                    الدورة
                                                                </a>
                                                                <a href="#" class="out-corse">
                                                                    <i class="fa fa-sign-out"></i> إنسحاب من
                                                                    الدورة
                                                                </a>
                                                            </div>
                                                            <!-- /.corse-action -->
                                                        </div>
                                                        <!-- /.card-data -->

                                                    </div>
                                                    <!-- /.card-inner -->
                                                </div>
                                                <!-- /.card -->

                                                <div class="card col-md-6 col-xs-12 pull-right">
                                                    <div class="card-inner">
                                                        <span class="corse-type">جافا سكربت</span>
                                                        <div class="card-img">
                                                            <img src="{{ asset('assets/images/bg-4.jpg') }}" alt=""
                                                                class="img-responsive">
                                                            <div class="lessons-number text-center">
                                                                <h1>
                                                                    <i class="fa fa-play-circle"></i>
                                                                    100
                                                                </h1>
                                                            </div>
                                                            <!-- /.lessons-number -->
                                                        </div>
                                                        <!-- /.card-img -->
                                                        <div class="card-data">
                                                            <div class="course_name text-right">
                                                                <h1>
                                                                    <a href="#">البرمجة بدون كود </a>
                                                                </h1>
                                                            </div>
                                                            <!-- /.course-name -->
                                                            <div class="course_setting text-right">
                                                                <span class="course_date">
                                                                    <i class="fa fa-calendar"></i>
                                                                    من 01 فبراير 2016 إلى 30 مايو 2016
                                                                </span>
                                                            </div>
                                                            <!-- /.course_setting -->
                                                            <div class="course_instructor-data">
                                                                <span>
                                                                    <img src="{{ asset('assets/images/s.png') }}"
                                                                        width="70" height="70" class="img-responsive">
                                                                </span>
                                                                <a href="#">
                                                                    <i class="fa fa-user"></i> أمير ناجح الدسوقي
                                                                </a>
                                                            </div>
                                                            <!-- /.course_instructor-data -->
                                                            <div class="corse-action">
                                                                <a href="#" class="gonna-corse">
                                                                    <i class="fa fa-paper-plane"></i> إذهب الي
                                                                    الدورة
                                                                </a>
                                                                <a href="#" class="out-corse">
                                                                    <i class="fa fa-sign-out"></i> إنسحاب من
                                                                    الدورة
                                                                </a>
                                                            </div>
                                                            <!-- /.corse-action -->
                                                        </div>
                                                        <!-- /.card-data -->

                                                    </div>
                                                    <!-- /.card-inner -->
                                                </div>
                                                <!-- /.card -->

                                                <div class="card col-md-6 col-xs-12 pull-right">
                                                    <div class="card-inner">
                                                        <span class="corse-type">جافا سكربت</span>
                                                        <div class="card-img">
                                                            <img src="{{ asset('assets/images/bg-4.jpg') }}" alt=""
                                                                class="img-responsive">
                                                            <div class="lessons-number text-center">
                                                                <h1>
                                                                    <i class="fa fa-play-circle"></i>
                                                                    100
                                                                </h1>
                                                            </div>
                                                            <!-- /.lessons-number -->
                                                        </div>
                                                        <!-- /.card-img -->
                                                        <div class="card-data">
                                                            <div class="course_name text-right">
                                                                <h1>
                                                                    <a href="#">البرمجة بدون كود </a>
                                                                </h1>
                                                            </div>
                                                            <!-- /.course-name -->
                                                            <div class="course_setting text-right">
                                                                <span class="course_date">
                                                                    <i class="fa fa-calendar"></i>
                                                                    من 01 فبراير 2016 إلى 30 مايو 2016
                                                                </span>
                                                            </div>
                                                            <!-- /.course_setting -->
                                                            <div class="course_instructor-data">
                                                                <span>
                                                                    <img src="{{ asset('assets/images/s.png') }}"
                                                                        width="70" height="70" class="img-responsive">
                                                                </span>
                                                                <a href="#">
                                                                    <i class="fa fa-user"></i> أمير ناجح الدسوقي
                                                                </a>
                                                            </div>
                                                            <!-- /.course_instructor-data -->
                                                            <div class="corse-action">
                                                                <a href="#" class="gonna-corse">
                                                                    <i class="fa fa-paper-plane"></i> إذهب الي
                                                                    الدورة
                                                                </a>
                                                                <a href="#" class="out-corse">
                                                                    <i class="fa fa-sign-out"></i> إنسحاب من
                                                                    الدورة
                                                                </a>
                                                            </div>
                                                            <!-- /.corse-action -->
                                                        </div>
                                                        <!-- /.card-data -->

                                                    </div>
                                                    <!-- /.card-inner -->
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.type -->
                                        </div>
                                        <!-- /#currentmy -->
                                        <div role="tabpanel" class="tab-pane fade" id="commingmy">
                                            <div class="flash_empty text-center">
                                                <h1 class="animated shake">
                                                    <i class="fa fa-frown-o"></i>
                                                    عفواً لا يوجد لديك دورات في هذا القسم
                                                </h1>
                                            </div>
                                            <!-- /.flash_empty -->
                                        </div>
                                        <!-- /#commingmy -->
                                        <div role="tabpanel" class="tab-pane fade" id="finishedmy">
                                            <div class="flash_empty text-center">
                                                <h1 class="animated shake">
                                                    <i class="fa fa-frown-o"></i>
                                                    عفواً لا يوجد لديك دورات في هذا القسم
                                                </h1>
                                            </div>
                                            <!-- /.flash_empty -->
                                        </div>
                                        <!-- /#finishedmy -->
                                    </div>

                                </div>
                            </div>
                            <!-- /.my_courses-container -->
                        </div>
                        <!-- ./home_data -->
                    </div>
                    <!-- /.home-content -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="my_certf">
                    <div class="home-head">
                        <h1>
                            <i class="fa fa-file"></i>
                            الشهادات التي حصلت عليها من انهاء الدورات
                        </h1>
                    </div>
                    <!-- /.home-head -->
                    <div class="home-content pass-content col-xs-12">
                        <div class="home_data col-xs-12 pull-right text-right">
                            <div class="home_data-item col-md-12  col-xs-12 pull-right">
                                <div class="my-sertf">
                                    <ul>
                                        <li>
                                            <h1>
                                                <i class="fa fa-file"></i>
                                                شهادة اتمام دورة البرمجة بلغة الجافا
                                            </h1>
                                            <a href="#">
                                                <i class="fa fa-cloud-download"></i> تحميل الشهادة
                                            </a>
                                        </li>
                                        <li>
                                            <h1>
                                                <i class="fa fa-file"></i>
                                                شهادة اتمام دورة البرمجة بلغة الجافا
                                            </h1>
                                            <a href="#">
                                                <i class="fa fa-cloud-download"></i> تحميل الشهادة
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- end my-certf -->
                            </div>
                            <!-- /.home_data-item -->
                        </div>
                        <!-- ./home_data -->
                    </div>
                    <!-- /.home-content -->
                </div>
            </div>
            <!-- /.tap-content -->
        </div>
        <!-- /.left_tap-box -->
    </div>
    <!-- /.left_tap-box -->
    </div>
    <!-- /.container -->
    </div>
    <!-- /.profile-content -->
    @auth('trainer')
        <div class="courses">
            <div class="container">
                <div class="courses-head text-center">
                    <h1>دوراتي للطالب</h1>
                </div>
                <!-- /.testominal-head -->
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
                </div>
                @endforeach
            </div>
        </div>

        <!-- /.row -->

        <!-- /.all-courses -->
        </div>
        </div>

    @endauth

    </div>
    </div>
    </div>
    <!-- /.conainer -->
    </div>

@endsection

@push('script')

@endpush
