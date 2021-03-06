@extends('website.layout.master')

@push('style')

@endpush

@section('title')
    <title> العلوم العصرية للتدريب | إتصل بنا </title>
@endsection

@section('content')

    <div class="wrap">
        <div class="loading">
            <div class="bounceball"></div>
            <div class="text">NOW LOADING</div>
        </div>
    </div>

    <!-- end the loading screen -->

    <div class="wrapper st-container" id="st-container">
        <!-- content push wrapper -->
        <div class="st-pusher">

            <nav class="st-menu st-effect-8" id="menu-8">
                <span class="close-nav" title="Close">
                    <i class="fa fa-times"></i>
                </span>
                <h2 class="icon icon-stack">
                    <img src="{{ asset('assets/images/logo.png') }}" class="img-responsive">
                </h2>
                <ul>
                    <li><a class="icon icon-data" href="{{ route('website.home.index') }}"><i class="fa fa-user"></i>
                            الرئيسية</a></li>
                    <li><a id="sd" class="icon icon-location" href="{{ route('website.about.index') }}"><i
                                class="fa fa-group"></i>من نحن</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.addcourses.index') }}"><i class="fa fa-plus"></i>
                            اضافة دورة</a></li>
                    <li><a class="icon icon-photo" href="{{ route('website.addlectures.index') }}"><i
                                class="fa fa-plus"></i>اضافة محاضرة</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.addtests.index') }}"><i
                                class="fa fa-plus"></i>اضافة اختبار</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.allcourses.index') }}"><i
                                class="fa fa-database"></i>جميع الدورات</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.category.index') }}"><i
                                class="fa fa-rocket"></i>قسم معين</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.certif.index') }}"><i
                                class="fa fa-file"></i>شهادة التقدير</a></li>
                    <li><a class="icon icon-photo" href="{{ route('website.contact.index') }}"><i
                                class="fa fa-phone"></i>اتصل بنا</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.alerts.index') }}"><i
                                class="fa fa-alerts"></i>التنبيهات</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.comments.index') }}"><i
                                class="fa fa-comments"></i>التعليقات</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.courses.index') }}"><i
                                class="fa fa-rocket"></i>درس معين</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.introcourses.index') }}">مقدمة الدرس</a></li>
                    <li><a class="icon icon-photo" href="#">صفحة الدرس</a></li>
                    <li><a class="icon icon-wallet" href="{{ route('website.profile.index') }}"><i
                                class="fa fa-user"></i>الحساب الشخصي</a></li>
                    <li><a class="icon icon-data" href="{{ route('website.reset.index') }}">تغير كلمة المرور</a></li>
                    <li><a class="icon icon-location" href="{{ route('website.signup.index') }}"><i
                                class="fa fa-user-plus"></i>تسجيل حساب جديد</a></li>
                    <li><a class="icon icon-study" href="{{ route('website.tests.index') }}">صفحة الاختبار</a></li>
                    <li><a class="icon icon-photo" href="{{ route('trainer.trainer.index') }}"><i
                                class="fa fa-lock"></i>سياسة الخصوصية</a></li>
                </ul>
            </nav>
            <!-- /.st-effect-8 nav -->


            <div class="st-content">

                <div id="st-trigger-effects" class="column">
                    <button data-effect="st-effect-8" class="st_show">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <!-- /.st-trigger -->


                <header>

                    <div class="up-container">
                        <div class="up-header text-center">
                            <div class="container">
                                <h1>اتصل بنا </h1>
                            </div>
                            <!-- /.container -->
                        </div>
                        <!-- /.up-header -->
                        <div class="up-box contact-box text-right">
                            <div class="container">
                                <div class="contact-form col-md-6 col-xs-12 pull-right">
                                    <div class="inner">
                                        <h1>اتصل بنا </h1>
                                        <form method="post" action="{{ route('website.contact.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="contact-item">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="name" placeholder="الاسم بالكامل">

                                            </div>
                                            <!-- end contact-item -->
                                            <div class="contact-item">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" placeholder="ادخل ايميلك">
                                            </div>
                                            <!-- end contact-item -->
                                            <div class="contact-item">
                                                <i class="fa fa-comment-o"></i>
                                                <textarea placeholder="اكتب رسالتك " name="message"></textarea>
                                            </div>
                                            <!-- end contact-item -->
                                            <div class="contact-item">
                                                <button type="submit">إرسال</button>
                                                {{-- <a href="{{url()->previous()}}"> --}}
                                            </div>

                                            @if (session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                            @endif
                                            <!-- end contact-item -->
                                        </form>
                                    </div>
                                    <!-- end inner -->
                                </div>
                                <!-- end contact-form -->
                                <div class="FAQ col-md-6 col-xs-12 pull-left">
                                    <div class="inner">
                                        <h1>الاسئلة الشائعة</h1>
                                        <div class="faq-item">
                                            <div class="empty-msg text-center animated shake">
                                                <h1>
                                                    <i class="fa fa-frown-o"></i>
                                                    لا توجد اسئلة الان
                                                </h1>
                                            </div>
                                            <!-- end empty-msg -->

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
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingtwo"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapsetwo" aria-expanded="true"
                                                        aria-controls="collapsetwo">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingOne"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingtwo"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapsetwo" aria-expanded="true"
                                                        aria-controls="collapsetwo">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingOne"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingtwo"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapsetwo" aria-expanded="true"
                                                        aria-controls="collapsetwo">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingOne"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingtwo"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapsetwo" aria-expanded="true"
                                                        aria-controls="collapsetwo">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingOne"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="button" role="tab" id="headingtwo"
                                                        role="button" data-toggle="collapse" data-parent="#accordion"
                                                        href="#collapsetwo" aria-expanded="true"
                                                        aria-controls="collapsetwo">
                                                        <h4 class="panel-title">
                                                            <a>
                                                                <h5>
                                                                    <i class="fa fa-question-circle"></i>
                                                                </h5>
                                                                مقدمة في علوم الحاسب والتكنولوجيا الحديثة
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>نالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                                الغالبية تم تعديلها
                                                                بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص.
                                                                إن كنت تريد أن
                                                                تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك
                                                                أي كلمات أو
                                                                عبارات محرجة أو </p>
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>
                                                    <!-- /#collapseOne -->
                                                </div>
                                                <!-- /.panel-default -->
                                            </div>
                                            <!-- /.panel-group -->
                                        </div>
                                        <!-- end faq-item -->
                                    </div>
                                    <!-- end inner -->
                                </div>
                                <!-- end FAQ -->
                            </div>
                            <!-- /.container -->
                        </div>
                        <!-- /.up-box -->
                    </div>
                </header>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush
