@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title> الموقع </title>
@endsection

@section('content')

<div class="wrapper">

    <div class="profile-content empty-course">
        <div class="container">
            <div class="right_tap-box col-md-3 col-xs-12 hidden-xs hidden-sm pull-right">
                <div class="right_box-inner">
                    <!-- Nav tabs -->
                    <a class="toggle-slidenav hidden-xs hidden-sm">
                        <i class="fa fa-close"></i>
                    </a>
                    <form id="imageEditor">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <label for="gs">Grayscale</label>
                                <input id="gs" name="gs" type="range" min=0 max=100 value=0>
                            </li>
                            <li role="presentation">
                                <label for="blur">Blur</label>
                                <input id="blur" name="blur" type="range" min=0 max=10 value=0>
                            </li>
                            <li role="presentation">
                                <label for="br">Brightness</label>
                                <input id="br" name="br" type="range" min=0 max=200 value=100>
                            </li>

                            <li role="presentation">
                                <label for="ct">Contrast</label>
                                <input id="ct" name="ct" type="range" min=0 max=200 value=100>
                            </li>

                            <li role="presentation">
                                <label for="huer">Hue Rotate</label>
                                <input id="huer" name="huer" type="range" min=0 max=360 value=0>
                            </li>
                            <li role="presentation">
                                <label for="opacity">Opacity</label>
                                <input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
                            </li>
                            <li role="presentation">
                                <label for="invert">Invert</label>
                                <input id="invert" name="invert" type="range" min=0 max=100 value=0>
                            </li>

                            <li role="presentation">
                                <label for="saturate">Saturate</label>
                                <input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
                            </li>

                            <li role="presentation">
                                <label for="sepia">Sepia</label>
                                <input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
                            </li>
                            <li>
                                <input type="reset" form="imageEditor" id="reset" value="Reset" />
                            </li>
                        </ul>
                    </form>
                </div>
                <!-- /.right_box-inner -->
            </div>
            <!-- /.right_tap-box -->


            <div class="left_tap-box col-md-9 col-xs-12 pull-left">
                <div class="left_box-inner">
                    <!-- Tab panes -->
                    <div id="imageContainer" class="center">
                        <img src="{{asset('assets/images/b3.jpg')}}" class="img-responsive" />
                    </div>
                </div>
                <!-- /.left_tap-box -->
            </div>
            <!-- /.left_tap-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.profile-content -->

</div>
<!-- /.wrapper -->

<div class="toTop col-xs-12 text-center">
    <i class="fa fa-angle-up"></i>
</div>

@endsection

@push('script')
<script src="{{asset('assets/main.js')}}"></script>
@endpush
