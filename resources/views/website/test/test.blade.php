@extends('website.layout.master')

@push('style')

@endpush

@section('content')

<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>إضافة اختبار جديد</h1>
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
                            <h1>اضف السؤال</h1>
                            <textarea placeholder="اكتب سؤالك هنا"></textarea>
                        </div>
                        <!-- end lecture-item -->

                        <div class="lecture-item">
                            <h1>يجب عليك اختيار اجابة صحيحة واحده</h1>
                            <ul>
                                <li>
                                    <input type="checkbox">
                                    <input type="text" placeholder="اكتب الاجابة الاولي">
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <input type="text" placeholder="اكتب الاجابة الثانية">
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <input type="text" placeholder="اكتب الاجابة الثالثة">
                                </li>
                                <li>
                                    <input type="checkbox">
                                    <input type="text" placeholder="اكتب الاجابة الاخيرة">
                                </li>
                            </ul>
                        </div>
                        <!-- end lecture-item -->
                        <div class="lecture-item confirm-lec">
                            <input type="submit" value="نشر الاختبار">
                        </div>
                        <!-- end lecture-item -->
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
<script type="text/javascript">
    $('#tabsleft').bootstrapWizard({
        'tabClass': 'nav nav-tabs',
        'debug': false,
        onTabShow: function (tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index + 1;
            var $percent = ($current / $total) * 100;
            $('#tabsleft .progress-bar').css({
                width: $percent + '%'
            });

            // If it's the last tab then hide the last button and show the finish instead
            if ($current >= $total) {
                $('#tabsleft').find('.pager .next').hide();
                $('#tabsleft').find('.pager .finish').show();
                $('#tabsleft').find('.pager .finish').removeClass('disabled');
            } else {
                $('#tabsleft').find('.pager .next').show();
                $('#tabsleft').find('.pager .finish').hide();
            }

        }
    });

    $('#tabsleft .finish').click(function () {
        alert('Finished!, Starting over!');
        $('#tabsleft').find("a[href*='tabsleft-tab1']").trigger('click');
    });
</script>
@endpush
