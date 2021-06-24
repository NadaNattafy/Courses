@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> الحصول علي شهادة اتمام الدور </title>
@endsection

@section('content')

<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>مبروك لقد اتممت هذه الدورة بنجاح</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form certf-container">
                <div class="certficat-box text-center" id="Certification">
                    <h1>شهادة اتمام دورة</h1>
                    <span>تمنح الي الطالب</span>
                    <h2>أمير ناجح الدسوقي</h2>
                    <h4>لإجتيازه اختبار مادة بلا بلا بلا</h4>
                    <p>اسم المادة</p>

                    <div class="admin-log">
                        <div class="cer-date">
                            تاريخ
                        </div>
                        <div class="date">
                            10/10/2010
                        </div>
                    </div>
                    <div class="admin-log1">
                        <div class="cer-date">
                            توقيع
                        </div>
                        <div class="date">
                            المدرس المختص
                        </div>
                    </div>

                </div>
                <!-- end certificate-box -->
            </div>
            <!-- /.up-form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-box -->
</div>

@endsection

@push('script')

<script language="javascript" type="text/javascript">
    function printDiv(Certification) {
        var printContents = document.getElementById(Certification).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

@endpush
