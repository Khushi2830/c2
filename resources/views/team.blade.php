@extends('homeparent')
@section('title', 'Meet our Team')

@section('content1')
    <div class="container py-5   ">
        <h2 class="text-center mb-5">Meet Our Team</h2>

        <div class="row justify-content-center mb-4">
            <div class="col-md-6 col-lg-4">
                <div class="team-card mx-auto">
                    <img src="https://kitabiadda.com/assets/images/sadiqsir.jpg" alt="Mentor">
                    <h5>Sayed SadiQ Hussain</h5>
                    <p>Mentor</p>
                    <p><em>A wise and trusted guide and advisor</em></p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-4">
            <div class="col-md-5 col-lg-4">
                <div class="team-card mx-auto">
                    <img src="{{ asset("photo3.jpeg") }}" alt="Shudhanshu">
                    <h5>Khushi kumari</h5>
                    <p>Developer</p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="team-card mx-auto">
                    <img src="{{ asset("photo.jpeg") }}" alt="Ankur">
                    <h5>Aastha priya</h5>
                    <p>Developer</p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <style>
    .team-card img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #772fbf;
        margin-bottom: 15px;
    }
    @media (max-width: 768px) {
    .team-card img {
        width: 120px;
        height: 120px;
    }

}
 .team-card img {
        width: 140px; /* Increase as needed */
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #772fbf;
        margin-bottom: 15px;
    }
  </style>
@endsection