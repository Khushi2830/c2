@extends('x')
@section('title', 'Profile')

@section('content3')

    <style>
        body {
            background-color: #e4c8f4;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            background-color: #6610f2;
            color: white;
            height: 100vh;
            padding: 30px 20px;
            position: sticky;
            top: 0;
            overflow-y: auto;
            width: 100%;
            max-width: 300px;
            /* Increased sidebar width */
        }

        .sidebar .avatar {
            width: 100px;
            height: 100px;
            background-color: #f54b0a;
            border-radius: 50%;
            font-size: 3rem;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 15px;
        }

        .sidebar .name {
            text-align: center;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .sidebar .email {
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar .nav-link {
            color: #6610f2;
            background-color: white;
            margin-bottom: 12px;
            border-radius: 10px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            font-weight: 500;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        .sidebar .nav-link:hover {
            background-color: #ddd6f6;
            color: #3b0ca3;
        }

        .sidebar .logout {
            background-color: #dc3545;
            color: white !important;
        }

        .main-content {
            padding: 40px 30px;
        }

        .profile-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.08);
            padding: 40px;
        }

        .profile-avatar {
            width: 110px;
            height: 110px;
            background-color: #f54b0a;
            border-radius: 50%;
            font-size: 3.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin: 0 auto 20px;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-save {
            background-color: #6610f2;
            color: white;
            padding: 10px 30px;
            border-radius: 8px;
        }

        .btn-save:hover {
            background-color: #3b0ca3;
        }

        @media (max-width: 767px) {
            .main-content {
                padding: 20px;
            }

            .sidebar {
                max-width: 100%;
                height: auto;
                position: static;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-12 sidebar d-flex flex-column" style=" background-color: #7a2dc5;">
                <div class="avatar" style=" background-color: #e4c8f4;">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="name">
                    {{ Auth::user()->name }} {{ Auth::user()->lastname }}
                </div>
                <div class="email">
                    {{ Auth::user()->email }}
                </div>

                <a href="{{ route("profile") }}" class="nav-link"><i class="fas fa-pen"></i> Edit Details</a>
                <a href="{{route('order')}}" class="nav-link"><i class="fas fa-box"></i> My Orders</a>
                <a href="{{route('address')}}" class="nav-link"><i class="fas fa-map-marker-alt"></i> My Address</a>
                <a href="#" class="nav-link"><i class="fas fa-cog"></i> Settings</a>
                <a href="{{ route('index.logout') }}" class="nav-link logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-12 main-content">
                <h3 class="mb-4">Edit Details</h3>

                <div class="profile-card">
                    <div class="text-center">
                        <div class="profile-avatar" style=" background-color: #e4c8f4;">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    </div>

                    <form action="{{ route('user.update', Auth::user()) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Contact</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ Auth::user()->phone ?? '' }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contact</label>
                                <input type="date" name="date" class="form-control" value="{{  Auth::user()->date ?? '' }}">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-save">Save Changes</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection