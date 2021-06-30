@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> العلوم العصرية للتدريب | إضافة دورة جديدة </title>
@endsection

@section('content')

<div class="up-container">

    <div class="up-header text-center">
        <div class="container">
            <h1>إضافة دورة جديدة</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form">

                <form action="#" method="get" class="add-form">
                    <div class="up_form-item">
                        <h1>عنوان الدورة</h1>
                        <input type="text" placeholder="اضف عنوان الدورة">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <h1>متطلب سابق</h1>
                        <input type="text" placeholder="إسم المستخدم">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <h1>المجال</h1>
                        <select>
                            <option>علوم حاسب</option>
                            <option>علوم حاسب</option>
                            <option>علوم حاسب</option>
                            <option>علوم حاسب</option>
                        </select>
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <h1>رابط فيديو</h1>
                        <div class="add_cont text-right">
                            <div class="lecture-item">
                                <div class="add_cont text-right">
                                    <label class="text-right">
                                        <input type="checkbox" id="up-video">
                                        <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                    </label>

                                    <div class="videoUploaded col-xs-12 text-right">
                                        <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                        <input type="file" class="uploaded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush
