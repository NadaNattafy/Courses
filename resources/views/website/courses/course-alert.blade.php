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
                        <a href="#" class="active">
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
                            <span class="padge">4</span>
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
                <div class="alert-box">
                    <div class="all-alerts col-xs-12 text-right">
                        @foreach ($remarks as $remark)
                        <ul>
                            <li>
                                <h1>{{ $remark->title }}</h1>
                                <span>
                                    {{  \Carbon\Carbon::now()->locale('ar')->format('d-m-Y')}}
                                    {{ $remark->created_at }}
                                </span>
                                <p>{{ $remark->body }}</p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <!-- end alert-box -->
            </div>
            <!-- end container -->
        </div>
        <!-- end lesson-box -->
    </div>
    <!-- end corse-box -->

</div>

@endsection

@push('script')

<script src="{{asset('assets/js/video.js')}}" type="text/javascript"></script>

@endpush
