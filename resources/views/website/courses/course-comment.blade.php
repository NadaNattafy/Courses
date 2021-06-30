@extends('website.layout.master')

@push('style')
<link href="{{asset('assets/css/video-js.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('title')
<title>صفحة الكورس المنفرد | العلوم العصرية للتدريب</title>
@endsection

@section('content')

<div class="intro-container col-xs-12">
    <div class="intro-head text-center">
        <div class="container">
            <h1>كورس البرمجة بلغة الجافا</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-head -->

    <div class="corse-box col-xs-12">
        <div class="corse-nav text-center">
            <div class="container">
                <ul>
                    <li>
                        <a href="{{route('course')}}">
                            <i class="fa fa-tasks"></i> الدروس
                        </a>
                    </li>

                    <li>
                        <a href="{{route('course-comment')}}" class="active">
                            <i class="fa fa-commenting-o"></i> النقاشات
                        </a>
                    </li>

                    <li>
                        <a href="{{route('course-alert')}}">
                            <i class="fa fa-bell"></i> التنويهات
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end container -->
        </div>
        <!-- end corse-nav -->
        <div class="lesson-box text-right">
            <div class="container">
                <div class="comments-disqus">
                    <div class="empty-msg text-center animated shake">
                        <h1>
                            <i class="fa fa-frown-o"></i>
                            لا يوجد دروس الان ولكن يمكنك الاشتراك في الدورة لحين بدأها
                        </h1>
                    </div>
                    <!-- end empty-msg -->
                </div>
                <!-- end comments-disqus -->
            </div>
            <!-- end container -->
        </div>
        <!-- end lesson-box -->
    </div>
    <!-- end corse-box -->

</div>
<!-- /.intro-container -->

@endsection

@push('script')

<script src="{{asset('assets/js/video.js')}}" type="text/javascript"></script>

@endpush
