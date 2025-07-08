@extends('admin.parent')

@section('title')
    Manage Application
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>
            <div class="col-lg-9 col-md-8 content-column mt-5 ">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0 fw-bold " style="color: #6f42c1;">Manage Application </h2>
                </div>
                @if(session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('maseg'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Delete!</strong> {{ session('maseg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                <div class="table-responsive shadow rounded-4 bg-white p-3">
                    <table class="table table-striped align-middle table-hover mb-0">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>1stname</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                            @foreach($applications as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <form action="{{ route('admin.approveEmployee', $employee->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-success btn-sm"
                                                style="background-color: #6f42c1" ;><i class="bi bi-check2-circle"></i></button>
                                        </form>
                                        <form action="{{route("application.delete", $employee->id)}}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger  btn-sm"
                                                style="background-color: #6f42c1;"><i class="bi bi-trash"></i></button>
                                        </form>
                                        <form action="{{route("view.application", $employee->id)}}" method="GET"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-danger  btn-sm"
                                                style="background-color: #6f42c1;"><i class="bi bi-eye"></i></button>
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