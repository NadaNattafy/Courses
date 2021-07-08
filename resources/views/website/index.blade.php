@extends('website.layout.master')

@push('style')

@endpush

@section('title')
    <title> العلوم العصرية للتدريب </title>
@endsection

@section('content')

<div class="wrap">
    <div class="loading">
        <div class="bounceball"></div>
        <div class="text">NOW LOADING</div>
    </div>
</div>
<div class="search-box">
    <div class="container">
        <div class="search-inner">
            <h1 class="text-center">تستطيع من خلال موقعنا البحث  عن كل ما تريد من كورسات </h1>
            <form action="#" method="get">
                <div class="form-item col-xs-12">
                    <div class="input-container col-md-10 col-xs-12 input-lft pull-right">
                        <input type="text" placeholder="ابحث عن جميع الكورسات من هنا">
                    </div>
                    <!-- /.input-container -->
                    <div class="btn-container col-md-1 btn-right">
                        <a class="show-advanced">
                    بحث متقدم
                </a>
                    </div>
                    <!-- end btn-container -->
                    <div class="btn-container col-md-1">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <!-- end btn-container -->
                </div>
                <!-- /.form-item -->
                <div class="form-advanced col-xs-12 adv-left">
                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                        <h2>ابحث بسعر الكورس</h2>
                        <input type="text" placeholder="ابحث بإسم المدرس">
                    </div>
                    <!-- /.advanced-item -->
                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                        <h2>ابحث بسعر الكورس</h2>
                        <input type="text" placeholder="ابحث بإسم الكورس">
                    </div>
                    <!-- /.advanced-item -->
                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                        <h2>ابحث بسعر الكورس</h2>
                        <input type="text" placeholder="ابحث بنوع الكورس">
                    </div>
                    <!-- /.advanced-item -->
                    <div class="advanced-item col-md-3 col-xs-12 adv-right pull-right">
                        <h2>ابحث بسعر الكورس</h2>

                        <input placeholder="من" type="number" class="pull-right price-from" data-toggle="tooltip" data-placement="top" title="مـن">
                        <input placeholder="إلي" type="number" class="price-to" data-toggle="tooltip" data-placement="top" title="إلـي">
                        <div class="text-right price-spec">
                            <label id="ko">
                                <input type="checkbox" class="price-free"> مجاني
                            </label>
                        </div>
                    </div>
                    <!-- /.advanced-item -->
                </div>
                <!-- /.form-advanced -->
            </form>
        </div>
        <!-- /.search-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.search-box -->

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
                    <div><img src="{{ asset('assets/images/b3.jpg') }}" alt="img05"
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
        <!-- /.row -->

        <div class="all-courses text-center">
            <a href="all-courses.html">عرض جميع الكورسات</a>
        </div>
        <!-- /.all-courses -->

    </div>
    <!-- /.conainer -->
</div>
<!-- /.courses -->

<div class="testominal">
    <div class="overlay"></div>
    <div class="container">
        <div class="testo-head text-center">
            <h1>قالوا عنا</h1>
        </div>
        <!-- /.testominal-head -->
        <div class="testo-slider text-center">
            @foreach ($useropinions as $useropinion )
            <div class="testo-item col-xs-12">

                <p>{{$useropinion -> description}}</p>
                <div class="testo-img">
                    {{-- <img src="{{asset('assets/images/comment-02.jpg')}}" alt="" class="img-responsive"> --}}
                    <img src="{{url('/').'/storage/'.$useropinion -> img}}" alt="" class="img-responsive">
                </div>
                <h1>{{$useropinion -> name}}</h1>
                @endforeach

            </div>
        </div>
    </div>
</div>


            @endsection

            @push('script')

            @endpush
