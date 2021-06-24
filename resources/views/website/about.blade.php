@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> العلوم العصرية للتدريب | عن الموقع </title>
@endsection

@section('content')

<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>معلومات عن الموقع</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box about-box">
        <div class="container">
            <div class="about-img col-md-4 col-xs-12 pull-left">
                <img src="{{asset('assets/images/3lom.jpg')}}" class="img-responsive" alt="">
            </div>
            <!-- end about-img -->
            <div class="about-data col-md-8 col-xs-12 pull-right text-right">
                <p>
                    هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت.


                </p>
            </div>
            <!-- end about-data -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-box -->
</div>
@endsection

@push('script')

@endpush
