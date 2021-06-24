@extends('admin.layout.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Admin</h4>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Admin</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.admins.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name</Title>:</strong>
                {{ $admin->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</Title>:</strong>
                {{ $admin->email }}
            </div>
        </div>


    </div>
</div>
</div>
</div>
@endsection


