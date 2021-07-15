@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Course</h4>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Course</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.courses.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</Title>:</strong>
                {{ $course->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</Title>:</strong>
                {{ $course->price }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Img:</strong>
                <img src="{{url('/').'/storage/'.$course -> img}}" style="height: 50px; width:50px;">
            </div>
        </div>


    </div>
</div>
</div>
</div>
@endsection


