@extends('admin.layout.login')

@section('style')

<link href="{{asset('_dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('_dashboard/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('_dashboard/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('_dashboard/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('_dashboard/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('_dashboard/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('_dashboard/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
<div class="container">

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="index.html" class="logo"><span>Admin<span>to</span></span></a>
        <h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
        </div>
    
        <div class="panel-body">
            <form method="POST" action="{{route('admin.admin.login')}}">
                @csrf
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="email" required="" placeholder="email">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-custom">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center m-t-30">
                    <div class="col-xs-12">
                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- end card-box-->

    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a></p>
        </div>
    </div>
</div>
</div>
@endsection

@push('script')
<script>
    var resizefunc = [];
</script>

 <!-- jQuery  -->
 <script src="{{asset('_dashboard/assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/detect.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/fastclick.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/jquery.slimscroll.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/jquery.blockUI.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/waves.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/wow.min.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/jquery.nicescroll.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/jquery.scrollTo.min.js')}}"></script>

 <!-- App js -->
 <script src="{{asset('_dashboard/assets/js/jquery.core.js')}}"></script>
 <script src="{{asset('_dashboard/assets/js/jquery.app.js')}}"></script>

 @endpush
