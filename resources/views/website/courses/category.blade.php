@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title>صفحة كورس معين</title>
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
                        <a href="{{route('website.home.index')}}" title="العلوم العصرية للتدريب">
                            <img src="{{ asset('assets/images/logo.png')}}" alt="site-logo" width="110" height="70">
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
        <!-- /.header-nav -->

    </header>
</div>

<div class="allcourses-box">
    <div class="allcourses-head text-center">
        <div class="container">
            <h1>علوم الحاسب</h1>

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
    <div class="courses">
        <div class="container">
            <div class="courses-head text-center">
                <h1>أحدث الكورسات</h1>
            </div>
            <!-- /.testominal-head -->
            <div class="row block-container">
                @foreach ($courses as $course)
                <div class="block col-md-4 col-sm-6">
                    <figure>
                        <div><img src="{{url('/').'/storage/'.$course -> img}}" alt="img05"
                                class="img-responsive">
                        </div>
                        <figcaption class="text-right">
                            <h1> اسم الكورس : {{ $course->name }}</h1>
                            <h1> اسم المدرس : {{ $course->trainer->name }}</h1>
                            <h1> عدد الطلبة المشتركين : 5</h1>
                            <h1> تاريخ بداية الكورس : {{ $course->created_at }}</h1>
                            {{-- <h1> تقييم الكورس : {{ $course->review->rate }}</h1> --}}
                            <a href="{{ route('website.courses.show', $course->id)  }}">
                                <i class="fa fa-eye"></i> مشاهدة الكورس
                            </a>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
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
