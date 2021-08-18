@extends('website.layout.master')

@push('style')
    <link href="{{ asset('assets/css/video-js.css') }}" rel="stylesheet" type="text/css">
<style>
  /** rating **/
/* div.stars {
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 20px;
  color:
#444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: 'f005';
  color:
#e74c3c;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color:
#e74c3c;
  text-shadow: 0 0 5px
#7f8c8d;
}

input.star-1:checked ~ label.star:before { color:
#F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: 'f006';
  font-family: FontAwesome;
}


.horline > li:not(:last-child):after {
    content: " |";
}
.horline > li {
  font-weight: bold;
  color:
#ff7e1a;

} */

.course_ratings .rating_submit {
    padding: 8px 30px;
    display: inline-block;
    background-color: #039be5;
    color: #fff;
    border: none;
    cursor: pointer;
}
.rating_submit_inner {
    display: block;
    direction: rtl;
    unicode-bidi: bidi-override;
    text-align: center;
}
.rating_submit_inner .star {
    display: none;
}
.rating_submit_inner label {
    color: lightgray;
    display: inline-block;
    font-size: 20px;
    margin: 0 px;
    transition: transform .15s ease;
    cursor: pointer;
}
.rating_submit_inner label:hover {
    transform: scale(1, 1);
}
.rating_submit_inner label:hover,
.rating_submit_inner label:hover ~ label {
    color: orange;
}
.rating_submit_inner .star:checked ~ label {
    color: orange;
}
.course_ratings .fa {
    color: #ff9800;
}
.course_ratings .fa.light {
    color: #d3d3d3;
}

/** end rating **/
      </style>

@endpush

@section('title')
    <title>صفحة الكورس المنفرد | العلوم العصرية للتدريب</title>
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

    <div class="intro-container col-xs-12">
        <div class="intro-head text-center">
            <div class="container">
                <h1>{{ $course->name }}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="corse-box col-xs-12">
            <div class="corse-nav text-center">
                <div class="container">

                    <ul>
                        <li>
                            <a href="#" class="add-alert-form">
                                <i class="fa fa-bullhorn"></i> إضافة تنويه
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sent-all">
                                <i class="fa fa-envelope"></i> إرسال للجميع
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('website.individualcourses.index') }}" class="active">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                        <li>
                            <a href="{{ route('website.comments.index') }}"  >
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('website.alerts.index') }}">
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>

                        <li>
                            <form class="add-fav-dis"  action="{{ route('website.favourites.store') }}"  method="POST">
                                @csrf
                                <input type="hidden" name="course_id" value={{ $course->id }}>
                            {{-- <a href="#" class="add-fav-dis" data-toggle="tooltip" data-placement="top"
                                title="إضافة الي المفضلة"> --}}
                                <button type="submit" class="add-fav-dis" >
                                <i class="fa fa-heart"></i>
                                </button>
                            </form>
                        </li>

                        <li class="rating" data-toggle="tooltip" data-placment="top" title="إضافة تقييم للدورة">
                        <form id="rate" class="form-horizontal poststars" action="{{ route('website.review.store') }}"  method="POST">
                            @csrf
                            <div class="form-group required">
                                  <div class="col-sm-12">
                                     </div>

                                <input type="hidden" name="course_id" value={{ $course->id }}>
                    <div class="rating_submit_inner">
                        <input id="radio1" type="radio" name="rate" value="5" class="star"/>
                        <label for="radio1">&#9733;</label>
                        <input id="radio2" type="radio" name="rate" value="4" class="star"/>
                        <label for="radio2">&#9733;</label>
                        <input id="radio3" type="radio" name="rate" value="3" class="star"/>
                        <label for="radio3">&#9733;</label>
                        <input id="radio4" type="radio" name="rate" value="2" class="star"/>
                        <label for="radio4">&#9733;</label>
                        <input id="radio5" type="radio" name="rate" value="1" class="star"/>
                        <label for="radio5">&#9733;</label>

                    </div>
                    <span>
                        <input type="submit" value="save" class='btn btn-primary'>
                    </span>
                        </form>
    </li>
</ul>
                    <!-- =========================================================================================================================================== -->

                    <div class="panel-pop modal" id="msg-all">
                        <div class="lost-inner">
                            <h1>
                                <i class="fa fa-envelope"></i>
                                إرسال لجميع الطلاب المشتركين في الدورة
                            </h1>

                            <form id="send-message" action="{{ route('website.messages.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="lost-item" id="messageTo">
                                    <textarea placeholder="اكتب الرسالة هنا" name="message"></textarea>
                                </div>
                                <!-- /.lost-item -->
                                <div class="text-center">
                                    <span>
                                        <input onclick="document.getElementById('send-message').submit()" type="submit"
                                            value="إرسال">
                                    </span>
                                </div>
                            </form>
                            <!-- /.lost-item -->
                        </div>
                        <!-- /.lost-inner -->
                    </div>
                    <!-- /.modal -->

                    <!-- =========================================================================================================================================== -->

                    <div class="panel-pop modal" id="alert-all">
                        <div class="lost-inner">
                            <h1>
                                <i class="fa fa-envelope"></i>
                                اضافة تنويه للطلاب المشتركين في الدورة
                            </h1>

                            <form id="add-remark" action="{{ route('website.remarks.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="lost-item" id="alert-item">
                                    <input type="text" name="title" placeholder="عنوان التنويه">
                                </div>
                                <!-- /.lost-item -->
                                <div class="lost-item" id="alert-item">
                                    <textarea placeholder="مضمون التنويه" name="body"></textarea>
                                </div>
                                <!-- /.lost-item -->
                                <div class="text-center">
                                    <span>
                                        <input onclick="document.getElementById('add-remark').submit()" type="submit"
                                            value="نشر التنويه">
                                    </span>
                                </div>

                            </form>
                            <!-- /.lost-item -->
                        </div>
                        <!-- /.lost-inner -->
                    </div>
                    <!-- /.modal -->

                    <!-- =========================================================================================================================================== -->
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->
            <div class="lesson-box text-right">
                <div class="container">
                    <div class="certf text-center animated bounceIn">
                        <h1>تهانينا لقد انتهيت من هذه الدورة بنجاح </h1>
                        <a href="#">
                            <i class="fa fa-print"></i> تستطيع طباعة الشهادة
                        </a>
                    </div>
                    <!-- end certf -->
                    <div class="empty-msg text-center animated shake">
                        @foreach ($lessons as $lesson)
                        <h1>
                            <i class="fa fa-tasks"></i>
                            {{ $lesson->name }}
                        </h1>
                        @endforeach
                    </div>
                    <!-- end empty-msg -->
                    <div class="week-module text-right">
                        <h1>
                            <i class="fa fa-tasks"></i>
                            الاسبوع الاول
                        </h1>
                    </div>
                    <!-- end week-moduke -->
                    <ul>
                        @foreach ($lessons as $lesson)
                        <li>
                                <a href="#" class="lesson-det">
                                    <i class="fa fa-play-circle"></i>
                                    <span class="lesson-name"> اسم الدرس :
                                        {{ $lesson->name }}</span>
                                </a>
                                <h3>{{ $lesson->duration }} دقيقة</h3>

                                <a href="{{ route('website.lessons.destroy', $lesson->id) }}" class="del-lesson" data-toggle="tooltip" data-placement="top" title="حذف الدرس">
                                    <i class="fa fa-trash"></i>
                                </a>
                        </li>
                        @endforeach

                    </ul>

                    <div class="take-exam col-xs-12 text-center">
                        {{-- <a href="{{route('test')}}"> --}}
                        <i class="fa fa-file-text-o"></i> ابدا الاختبار الان
                        </a>
                    </div>
                    <!-- end take-exam -->
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

    <script>
        $('#addStar').change('.star', function(e) {
        $(this).submit();
        });
    </script>

@endpush
