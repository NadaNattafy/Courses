@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> العلوم العصرية للتدريب | تعديل كلمة السر</title>
@endsection

@section('content')

<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>تغير كلمة المرور</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form forget-panel">

                <form action="#" method="get">
                    <div class="up_form-item">
                        <input type="password" placeholder="------" data-placement="top" title="اكتب كلمة المرور القديمة" data-toggle="tooltip">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <input type="password" placeholder="------" data-placement="top" title="اكتب كلمة المرور الجديدة" data-toggle="tooltip">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <input type="password" placeholder="------" data-placement="top" data-toggle="tooltip" title="أعد كتابة كلمة المرور الجديدة">
                    </div>
                    <!-- /.up_form-item -->

                    <!-- /.up_form-item -->
                    <div class="up_form-item up-confirm">
                        <input type="submit" value="حفظ">
                    </div>
                    <!-- /.up_form-item -->
                </form>

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
