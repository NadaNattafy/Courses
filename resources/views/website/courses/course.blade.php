@extends('website.layout.master')

@push('style')
    <link href="{{ asset('assets/css/video-js.css') }}" rel="stylesheet" type="text/css">
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
                            <a href="{{ route('website.courses.show', $course->id) }}" class="active">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                        <li>
                            <a href="#">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="course-alerts.html">
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>

                        <li>
                            <a href="#" class="add-fav" data-toggle="tooltip" data-placement="top"
                                title="إضافة الي المفضلة">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="add-fav-dis" data-toggle="tooltip" data-placement="top"
                                title="إضافة الي المفضلة">
                                <i class="fa fa-heart"></i>
                            </a>
                        </li>
                        <li class="rating" data-toggle="tooltip" data-placment="top" title="إضافة تقييم للدورة">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star active"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star active"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star-half-o active"></i>
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
                            </ul>
                        </li>
                    </ul>
                    <!-- =========================================================================================================================================== -->

                    <div class="panel-pop modal" id="msg-all">
                        <div class="lost-inner">
                            <h1>
                                <i class="fa fa-envelope"></i>
                                إرسال لجميع الطلاب المشتركين في الدورة
                            </h1>
                            <div class="lost-item" id="messageTo">
                                <textarea placeholder="اكتب الرسالة هنا"></textarea>
                            </div>
                            <!-- /.lost-item -->
                            <div class="text-center">
                                <input type="submit" value="إرسال">
                            </div>
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
                        <h1>
                            <i class="fa fa-frown-o"></i>
                            لا يوجد دروس الان ولكن يمكنك الاشتراك في الدورة لحين بدأها
                        </h1>
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
                        <li>
                            <a href="#" class="lesson-det">
                                <i class="fa fa-play-circle"></i>
                                <span class="lesson-name">أنواع البيانات 1 - البيانات العددية - numeric data types</span>
                            </a>
                            <h3>8 دقيقة</h3>
                            <a href="#" class="del-lesson" data-toggle="tooltip" data-placement="top" title="حذف الدرس">
                                <i class="fa fa-trash"></i>
                            </a>

                        </li>
                        <li>
                            <a href="#" class="lesson-det">
                                <i class="fa fa-play-circle"></i>
                                <span class="lesson-name">أنواع البيانات 1 - البيانات العددية - numeric data types</span>
                            </a>
                            <h3>8 دقيقة</h3>
                            <a href="#" class="del-lesson" data-toggle="tooltip" data-placement="top" title="حذف الدرس">
                                <i class="fa fa-trash"></i>
                            </a>

                        </li>
                        <li>
                            <a href="#" class="lesson-det">
                                <i class="fa fa-play-circle"></i>
                                <span class="lesson-name">أنواع البيانات 1 - البيانات العددية - numeric data types</span>
                            </a>
                            <h3>8 دقيقة</h3>
                            <a href="#" class="del-lesson" data-toggle="tooltip" data-placement="top" title="حذف الدرس">
                                <i class="fa fa-trash"></i>
                            </a>

                        </li>
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

@endpush
