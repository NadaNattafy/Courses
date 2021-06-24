@extends('website.layout.master')

@push('style')

@endpush

@section('title')
<title>صفحة كورس معين</title>
@endsection

@section('content')

<div class="allcourses-box">
    <div class="allcourses-head text-center">
        <div class="container">
            <h1>علوم الحاسب</h1>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.allcourses-head -->
    <div class="search-categories text-center">
        <div class="container">
            <div class="cat-item">
                <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-right">
                    <a href="#" class="show-cat">علوم الحاسب<i class="fa fa-caret-down"></i></a>
                    <div class="hidden-cat">
                        <ul>
                            <li>
                                <a href="#">برمجة ويب</a>
                            </li>
                            <li>
                                <a href="#">برمجة ويب</a>
                            </li>
                            <li>
                                <a href="#">برمجة ويب</a>
                            </li>
                            <li>
                                <a href="#">برمجة ويب</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /. cat-inner -->
                <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-left">
                    <form>
                        <input type="search" placeholder="ابحث عن كورسات أخري">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <!-- /. cat-inner -->
            </div>
            <!-- /.cat-item -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.search-categories -->
    <div class="allcourses-body">
        <div class="container">
            <div class="row">
                <div class="row block-container">

                    <div class="block col-md-4">
                        <figure>
                            <div><img src="{{asset('assets/images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>اسم الكورس</h1>
                                <h1>اسم المدرس</h1>
                                <h1>عدد الطلبة المشتركة</h1>
                                <h1>تاريخ بداية الكورس</h1>
                                <h1>تقييم الكورس</h1>
                                <a href="#">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- /.block -->
                    <div class="block col-md-4">
                        <figure>
                            <div><img src="{{asset('assets/images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>اسم الكورس</h1>
                                <h1>اسم المدرس</h1>
                                <h1>عدد الطلبة المشتركة</h1>
                                <h1>تاريخ بداية الكورس</h1>
                                <h1>تقييم الكورس</h1>
                                <a href="#">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- /.block -->
                    <div class="block col-md-4">
                        <figure>
                            <div><img src="{{asset('assets/images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>اسم الكورس</h1>
                                <h1>اسم المدرس</h1>
                                <h1>عدد الطلبة المشتركة</h1>
                                <h1>تاريخ بداية الكورس</h1>
                                <h1>تقييم الكورس</h1>
                                <a href="#">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- /.block -->
                    <div class="block col-md-4">
                        <figure>
                            <div><img src="{{asset('assets/images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>اسم الكورس</h1>
                                <h1>اسم المدرس</h1>
                                <h1>عدد الطلبة المشتركة</h1>
                                <h1>تاريخ بداية الكورس</h1>
                                <h1>تقييم الكورس</h1>
                                <a href="#">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- /.block -->
                    <div class="block col-md-4">
                        <figure>
                            <div><img src="{{asset('assets/images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>اسم الكورس</h1>
                                <h1>اسم المدرس</h1>
                                <h1>عدد الطلبة المشتركة</h1>
                                <h1>تاريخ بداية الكورس</h1>
                                <h1>تقييم الكورس</h1>
                                <a href="#">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- /.block -->
                    <div class="block col-md-4">
                        <figure>
                            <div><img src="{{asset('assets/images/b3.jpg')}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>اسم الكورس</h1>
                                <h1>اسم المدرس</h1>
                                <h1>عدد الطلبة المشتركة</h1>
                                <h1>تاريخ بداية الكورس</h1>
                                <h1>تقييم الكورس</h1>
                                <a href="#">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- /.block -->


                </div>
                <!-- /.row -->
            </div>
            <!-- /.row -->

            <div class="inner col-xs-12 text-center">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end inner -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.allcourses-body -->
</div>

@endsection

@push('script')

@endpush
