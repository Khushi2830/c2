@extends('homeparent')
@section('title', ' Stores Location')

@section('content1')

    <div class="container py-4">
        <div class="row align-items-center">
          
            <div class="col-md-6">
                <h4 style="color: #782ec3;" class="fw-bold mb-3">Locate the nearest store(s)</h4>
                <form class="border p-3 rounded-3 shadow-sm" style="background-color: #fdfbff;">
                    <div class="mb-2">
                        <label class="form-label">State</label>
                        <select class="form-select">
                            <option>All</option>
                            <option>Maharashtra</option>
                            <option>Bihar</option>
                            <option>Delhi</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">City</label>
                        <select class="form-select">
                            <option>All</option>
                            <option>Purnea</option>
                            <option>Patna</option>
                            <option>Katihar</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Locality</label>
                        <select class="form-select">
                            <option>All</option>
                            <option>Koratbari Madhubani Purnea</option>
                            <option>Hanuman Bhag Purnea</option>
                        </select>
                    </div>
                    <button class="btn mt-2 text-white" style="background-color: #782ec3;"><i
                            class="fas fa-search me-1"></i> Search</button>
                </form>
            </div>

            
            <div class="col-md-6 ">
                <img src="{{ asset('p.png') }}" width="600px" alt="Order Online" class="img-fluid rounded">

            </div>
        </div>

        <hr class="my-4">

        <h3 class="text-center fw-bold mb-4" style="color: #9580ba;">CREAMER STORES</h3>

        <div class="row">
           
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-light fw-bold text-dark">
                        <i class="fas fa-store me-1" style="color: #782ec3;"></i> Creamer Cake Shop
                    </div>
                    <div class="card-body">
                        <p class="mb-1"><strong>Creamer Shop</strong></p>
                        <p class="mb-1"><i class="fas fa-map-marker-alt me-1"></i>Hanuman Bhag Purnea - 854301</p>
                        <p class="mb-1"><i class="fas fa-landmark me-1"></i>near max 7</p>
                        <p class="mb-1"><i class="fas fa-phone me-1"></i> +91 7250409965</p>
                        <p><i class="fas fa-clock me-1"></i> Open until 09:30 PM</p>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-between">
                        <a href="#" class="btn btn-sm text-white" style="background-color: #9580ba;"><i
                                class="fas fa-location-arrow me-1"></i>Directions</a>
                        <a href="#" class="btn btn-sm text-white" style="background-color: #782ec3;"><i
                                class="fas fa-globe me-1"></i>Website</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-light fw-bold text-dark">
                        <i class="fas fa-store me-1" style="color: #782ec3;"></i> Creamer Cake Shop
                    </div>
                    <div class="card-body">
                        <p class="mb-1"><strong>Creamer Shop</strong></p>
                        <p class="mb-1"><i class="fas fa-map-marker-alt me-1"></i>Madhubani Bazar Purnea - 854301</p>
                        <p class="mb-1"><i class="fas fa-landmark me-1"></i>near Durga Mandir</p>
                        <p class="mb-1"><i class="fas fa-phone me-1"></i> +91 8292057979</p>
                        <p><i class="fas fa-clock me-1"></i> Open until 09:30 PM</p>
                    </div>
                    <div class="card-footer bg-white d-flex justify-content-between">
                        <a href="#" class="btn btn-sm text-white" style="background-color: #9580ba;"><i
                                class="fas fa-location-arrow me-1"></i>Directions</a>
                        <a href="#" class="btn btn-sm text-white" style="background-color: #782ec3;"><i
                                class="fas fa-globe me-1"></i>Website</a>
                    </div>
                </div>
            </div>

           
        </div>

<div class="mt-4 mb-3">
    <div class="ratio ratio-16x9 shadow rounded-4">
        <iframe 
            src="https://maps.google.com/maps?q=Purnea,%20Bihar&t=&z=13&ie=UTF8&iwloc=&output=embed" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>


        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next ></a></li>
                    <li class="page-item"><a class="page-link" href="#">Last >></a></li>
                </ul>
            </nav>
        </div>
    </div>

@endsection