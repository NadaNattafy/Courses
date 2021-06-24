@extends('website.layout.master')

@push('style')
<link href="{{asset('assets/css/video-js.css')}}" rel="stylesheet" type="text/css">
@endpush

@section('title')
<title>الدرس الاول | كورس البرمجة بلغة الجافا</title>
@endsection

@section('content')

<div class="intro-container">
    <div class="intro-head text-center">
        <div class="container">
            <h1>الدرس الاول من  دورة البرمجة بلغة الجافا</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-head -->
    <div class="corse-indv">
        <div class="container">
            <div class="mob-episodes col-xs-12">
                <ul>
                    <li>
                        <h1>
                            <i class="fa fa-tasks"></i>
                            الاسبوع الاول
                        </h1>
                    </li>
                    <li>
                        <a href="#" class="active">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-play-circle"></i> الدرس الاول
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end mob-episodes -->
            <div class="corse_indv-video col-md-12 col-xs-12 text-center">
                <div class="corse_indv-inner">
                    <!--                        <iframe width="100%" height="520" src="https://www.youtube.com/embed/tTgD9m1p5Ss?list=PLT56sSeAKiIvfQhsA2lXUUmjfh0JyEFU7" frameborder="0" allowfullscreen></iframe>-->
                    <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="420" poster="images/3lom1.jpg">
                        <source src="images/test.mp4" type='video/mp4' />
                    </video>
                    <div class="finish-corse text-left col-xs-12">
                        <a href="#">
                            لقد انهيت هذا الدرس
                        </a>
                        <div class="lesson-desc col-xs-12 text-right">
                            <h1>وصف المحاضرة</h1>
                            <p>هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت.

                            </p>
                        </div>
                    </div>
                    <!-- end finish-corse -->
                </div>
                <!-- end corse_indv-inner -->
            </div>
            <div class="corse-comments col-xs-12">
                <div class="disqus-comments">
                    <div class="empty-msg text-center animated shake">
                        <h1>
                            <i class="fa fa-commenting-o"></i>
عفوا لا توجد تعليقات علي هذا الدرس                                </h1>
                    </div>
                </div>
                <!-- end disqus-comments -->
            </div>
            <!-- end corse-comments -->
        </div>
        <!-- end container -->
    </div>
    <!-- end corse-indv -->
</div>
@endsection

@push('script')

<script src="{{asset('assets/js/video.js')}}" type="text/javascript"></script>

@endpush
