@extends('admin.parent')

@section('title')
    Manage Customise Cake Order
@endsection

@section('content')
    <div class="container-fluid dashboard-container m-0 p-0">
        <div class="row">
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 col-md-8 content-column">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4 mt-5">
                    <h2 class="page-title mb-0 fw-bold " style="color: #6f42c1;">Customise Cake Order</h2>
                </div>
                @session('msg')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession
                @session('maseg')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Delete!</strong> {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endsession

                <div class="table-responsive shadow rounded-4 bg-white p-3">
                    <table class="table table-striped align-middle table-hover mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>date</th>
                                <th>city</th>
                                <th>notes</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                            @foreach($wedding as $wd)
                                <tr>
                                    <td>{{ $wd->id }}</td>
                                    <td>{{ $wd->name }}</td>
                                    <td>{{ $wd->email }}</td>
                                    <td>{{ $wd->phone }}</td>
                                    <td>{{ $wd->date }}</td>
                                    <td>{{ $wd->city }}</td>
                                    <td>{{ $wd->description }}</td>
                                    <td>
                                        <form action="{{ route('admin.approvecake', $wd->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm"
                                                style="background-color: #6f42c1"><i class="bi bi-check2-circle"></i></button>
                                        </form>
                                        <form action="{{route('wedding.delete', $wd->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                style="background-color: #6f42c1"><i class="bi bi-trash"></i></button>
                                        </form>

                                        <form action="{{route("view.cake", $wd->id)}}" method="get" class="d-inline">

                                        <form action="{{route("view.cake", $wd->id)}}" method="GET" class="d-inline">

                                            @csrf

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                style="background-color: #6f42c1"><i class="bi bi-eye"></i></button>
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