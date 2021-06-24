@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Trainer</h4>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Trainer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.trainers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</Title>:</strong>
                {{ $trainer->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</Title>:</strong>
                {{ $trainer->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile</Title>:</strong>
                {{ $trainer->mobile }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender</Title>:</strong>
                {{ $trainer->gender}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>State</Title>:</strong>
                {{ $trainer->state }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course</Title>:</strong>
                {{ $trainer->course }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Field</Title>:</strong>
                {{ $trainer->field }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qualified</Title>:</strong>
                {{ $trainer->qualified }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Expertise</Title>:</strong>
                {{ $trainer->expertise }}
            </div>
        </div>

    </div>
</div>
</div>
</div>
@endsection


