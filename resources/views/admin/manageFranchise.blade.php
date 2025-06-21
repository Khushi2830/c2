@extends('admin.parent')

@section('title')
    Manage Franchise
@endsection

@section('content')
<div class="container-fluid dashboard-container py-4">
    <div class="row">
        <div class="col-lg-3 col-md-4 sidebar-column">
            @include("admin.sidebar")
        </div>
        <div class="col-lg-9 col-md-8 content-column">
            <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                <h2 class="page-title mb-0 fw-bold " style="color: #6f42c1;">Manage Franchise</h2>
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
                            <th>1stname</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <tbody class="text-center">
                      @foreach ($franchises as $fr)
                      

                        <tr>
                            <td>{{$fr->id}}</td>
                            <td>{{$fr->name}}</td>
                            <td>{{$fr->email}}</td>
                            <td>{{$fr->phone}}</td>
                            <td class="text-center">
                                <div class="action-buttons d-flex gap-2 ">
                                       
                                
                                        <a href="#" class="btn btn-danger btn-sm" style=" background-color: #8a2be2;" >
                                            <i class="bi bi-x-circle"></i>  Cancel
                                        </a>
                                        <a href="{{ route('approveFranchise', $fr->id) }}" style=" background-color: #8a2be2;"class="btn btn-success btn-sm">
                                            <i class="bi bi-check-circle"></i> Approve
                                        </a>
                                    
                                        
                                    </div>
                             </td>
                      @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
