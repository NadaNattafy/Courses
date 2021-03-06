@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Lesson</h4>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Lesson</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.lessons.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</Title>:</strong>
                {{ $lesson->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</Title>:</strong>
                {{ $lesson->description }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Url</Title>:</strong>
                {{ $lesson->url }}
            </div>
        </div>


    </div>
</div>
</div>
</div>
@endsection


