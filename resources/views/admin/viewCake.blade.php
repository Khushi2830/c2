@extends('admin.parent')

@section('title')
    Manage Cakes
@endsection

@section('content')
    <div class="container-fluid m-0 p-0">
        <div class="row">
            <div class="col-lg-3 col-md-4 sidebar-column">
                @include("admin.sidebar")
            </div>

            <div class="col-lg-9 col-md-8 content-column mt-4">
                <div class="dashboard-header d-flex justify-content-between align-items-center mb-4">
                    <h2 class="page-title mb-0 fw-bold " style="color:#6f42c1;"> Custom Cake Order Details</h2>
                    <a href="{{ route('manageCustomiseCake') }}" class="btn shadow-sm rounded-pill px-4 text-white"
                        style="background-color: #6f42c1;">
                        ← Back
                    </a>
                </div>

                <div class="card shadow-sm rounded-4 p-4 bg-white">
                    <div class="row g-4">

                        @php
                            $details = [
                                ['label' => 'Name', 'value' => $wedding->name, 'icon' => '👤'],
                                ['label' => 'Email', 'value' => $wedding->email, 'icon' => '📧'],
                                ['label' => 'Phone', 'value' => $wedding->phone, 'icon' => '📞'],
                                ['label' => 'Date', 'value' => $wedding->date, 'icon' => '📅'],
                                ['label' => 'City', 'value' => $wedding->city, 'icon' => '🏙️'],
                                ['label' => 'Description', 'value' => $wedding->description, 'icon' => '📝'],
                            ];
                        @endphp

                        @foreach ($details as $item)
                            @if ($item['value'])
                                <div class="col-md-6">
                                    <div class="border rounded p-3 bg-light h-100">
                                        <div class="fw-semibold text-muted small">
                                            {{ $item['icon'] }} {{ $item['label'] }}
                                        </div>
                                        <div class="fw-semibold">{{ $item['value'] }}</div>
                                    </div>
                                </div>
                            @endif

                            
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection