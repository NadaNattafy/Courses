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
            <h2>Edit Trainer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.trainers.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.trainers.update',$trainer->id) }}" method="POST"  enctype="multipart/form-data">
    @csrf

    @method('PUT')
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $trainer->name}}" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $trainer->email}}" class="form-control" placeholder="Email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" value="{{ $trainer->password}}" class="form-control" placeholder="Password">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mobile:</strong>
                <input type="text" name="mobile" value="{{ $trainer->mobile}}" class="form-control" placeholder="Mobile">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong>
                <input type="text" name="gender" value="{{ $trainer->gender}}" class="form-control" placeholder="Gender">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>State:</strong>
                <input type="text" name="state" value="{{ $trainer->state}}" class="form-control" placeholder="State">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course:</strong>
                <input type="text" name="course" value="{{ $trainer->course}}" class="form-control" placeholder="Course">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Field:</strong>
                <input type="text" name="field" value="{{ $trainer->field}}" class="form-control" placeholder="Field">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Qualified:</strong>
                <input type="text" name="qualified" value="{{ $trainer->qualified}}" class="form-control" placeholder="Qualified">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Expertise:</strong>
                <input type="text" name="expertise" value="{{ $trainer->expertise}}" class="form-control" placeholder="Expertise">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Specialty:</strong>
                <input type="text" name="specialty" value="{{ $trainer->specialty}}" class="form-control" placeholder="Specialty">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Img:</strong>
              <img src="{{url('/').'/storage/'.$trainer-> img}}" style="height: 50px; width:50px;">
              <input type="file" name="img" class="w-20 mb-8 shadow-xl" alt="" src=<img src="{{asset("storage/trainer->img")}}">
            </div>
        </div>


        @if(session()->has('message'))
                       <div class="alert alert-success">
                            {{ session()->get('message') }}
                       </div>
                    @endif

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
    </div>
</form>

</div>
</div>
</div>
@endsection

