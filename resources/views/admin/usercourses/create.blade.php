@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">User Course</h4>

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Add User COurse</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('admin.usercourses.index') }}"> Back</a>
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

                    <form action="{{ route('admin.usercourses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <select name="user_id" class="form-control">
                                @foreach($users  as $user)

                                    <option value="{{ $user->id }} ">{{ $user->name }}</option>
                                @endforeach
                            </select>

                            <select name="course_id" class="form-control">
                                @foreach($courses  as $course)

                                    <option value="{{ $course->id }} ">{{ $course->name }}</option>
                                @endforeach
                            </select>

                            @if(session()->has('message'))
                                           <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                           </div>
                                        @endif

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </form>
    @endsection

    @push('script')

        <!-- Vendor js -->

        <script src="{{ asset('_dashboard/assets/js/vendor.min.js') }}"></script>
        <!-- third party js -->
        <script src="{{ asset('_dashboard/assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/datatables/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('_dashboard/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ asset('_dashboard/assets/js/pages/datatables.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('_dashboard/assets/js/app.min.js') }}"></script>

    @endpush
