@extends('admin.layout.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="mt-0 header-title">Course</h4>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Trainer Name</th>
                                <th>Category Name</th>
                                <th>Price</th>
                                <th>Img</th>
                                <th>Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($courses as $course)

                                <tr>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->trainer->name }}</td>
                                    <td>{{ $course->category->name }}</td>
                                    <td>{{ $course->price}}</td>
                                    <td>
                                        <a class="fancybox-buttons img-holder small-img" rel="gallery" title=""
                                            data-fancybox-group="button" href="{{ url('/') . '/storage/' . $course->img }}"
                                            style="height: 50px; width:50px;">
                                            <img src="{{ url('/') . '/storage/' . $course->img }}"
                                                style="height: 50px; width:50px;">
                                        </a>

                                    </td>
                                    <td>
                                        <a class="btn btn-info"
                                            href="{{ route('admin.courses.show', $course->id) }}">Show</a>
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.courses.edit', $course->id) }}">Edit</a>
                                        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
