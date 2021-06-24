@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> العلوم العصرية للتدريب | إضافة محاضرة جديدة </title>
@endsection

@section('content')

<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>إضافة محاضرة جديدة</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form">

                <div class="add_lecture in-one">
                    <form action="#" method="get">
                        <div class="lecture-item">
                            <h1>اسم الدرس</h1>
                            <input type="text" placeholder="اضف اسم المحاضرة">
                        </div>
                        <!-- /.lecture-item -->
                        <div class="lecture-item">
                            <h1>اضف رابط خارجي للفيديو</h1>
                            <div class="add_cont text-right">
                                <label class="text-right">
                                    <input type="checkbox" id="up-video">
                                    <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                </label>

                                <div class="videoUploaded col-xs-12 text-right">
                                    <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                    <input type="file" class="uploaded">
                                </div>
                                <!--
                                                                        <label class="text-right">
                                                                            <input type="radio" id="add-link">
                                                                            <span>يوتيوب</span>
                                                                        </label>
-->
                            </div>
                            <input type="text" placeholder="ادخل رابط فيديو" class="linked">
                        </div>
                        <!-- /.lecture-item -->
                        <div class="lecture-item">
                            <h1>اسم الدرس</h1>
                            <textarea placeholder="اضف وصف المحاضرة"></textarea>
                        </div>
                        <!-- /.lecture-item -->
                        <div class="lecture-item text-right">
                            <div class="fileUpload col-xs-12 text-right">
                                <span><i class="fa fa-file"></i> رابط أوراق العمل </span>
                                <input type="file" class="upload">
                            </div>
                            <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>
                        </div>
                        <!-- /.lecture-item -->
                        <div class="lecture-item confirm-lec">
                            <input type="submit" value="إضافة محاضرة">
                        </div>
                        <!-- /.lecture-item -->

                    </form>
                </div>
                <!-- /.add_lecture -->
            </div>
            <!-- /.up-form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-box -->
</div>



@endsection

@push('script')

@endpush
