<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travela - Tourism Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">




        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Required meta tags and title -->

    <!-- ✅ Bootstrap CSS (Add this if missing) -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Optional custom CSS -->
        <!-- Template Stylesheet -->
        <link href="/css/style.css" rel="stylesheet">
        <!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    </head>

    <body>

        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->
<!-- Add this CSS in your page's <style> tag or CSS file -->
<style>
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-8px);
  }
}

.floating-btn {
  animation: float 0.5s ease-in-out infinite;
}
</style>

<!-- Topbar with floating 50% OFF button -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
  <div class="row gx-0 align-items-center" style="height: 45px;">
    
    <!-- Social Icons Left -->
    <div class="col-lg-4 text-start">
      <div class="d-inline-flex align-items-center">
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://x.com/Seven_Zones_UK">
          <i class="fab fa-twitter fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/sevenzonestravel/?ref=pages_you_manage">
          <i class="fab fa-facebook-f fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/sevenzonestravel/">
          <i class="fab fa-instagram fw-normal"></i>
        </a>
        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCSm39EgLYUeluT4UgmItTAA">
          <i class="fab fa-youtube fw-normal"></i>
        </a>
      </div>
    </div>

    <!-- Center Floating Button -->
    <div class="col-lg-4 text-center">
      <a href="#" class="btn btn-warning btn-sm rounded-pill px-4 fw-bold floating-btn shadow-sm">
        🎉 50% OFF
      </a>
    </div>

    <!-- Empty Right -->
    <div class="col-lg-4"></div>

  </div>
</div>


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    {{-- <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>SevenZones</h1> --}}
                     <img src="/img/sevenzoneslogo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('flights.search.form') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('packages') }}" class="nav-item nav-link">Packages</a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="destination.html" class="dropdown-item">Destination</a>
                                <a href="tour.html" class="dropdown-item">Explore Tour</a>
                                <a href="booking.html" class="dropdown-item">Travel Booking</a>
                                <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                                <a href="guides.html" class="dropdown-item">Travel Guides</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
                </div>
            </nav>


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-3">Book Your Flight</h1>
                   <h3 class="text-center mb-3">Flight: {{ $flight->airline }}</h3>
            </div>
        </div>
        <!-- Header End -->


<div class="bg-primary px-4 py-5">
    {{-- <h1 class="text-white mb-4 text-center">Book Your Flight</h1> --}}

    <div class="bg-white p-4 rounded shadow mx-auto" style="max-width: 700px;">
        <h3 class="text-center mb-3">Flight: {{ $flight->airline }}</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('booking.submit', $flight->id) }}">
            @csrf

            <div class="row g-3">
                <!-- Departure -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">From</label>
                    <input type="text" class="form-control" value="{{ $flight->departure_airport_name }}" readonly>
                </div>
                <!-- Arrival -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">To</label>
                    <input type="text" class="form-control" value="{{ $flight->arrival_airport_name }}" readonly>
                </div>

                <!-- Departure Date -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Departure Date</label>
                    <input type="text" class="form-control" value="{{ $flight->departure_date }}" readonly>
                </div>
                <!-- Arrival Date -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Arrival Date</label>
                    <input type="text" class="form-control" value="{{ $flight->arrival_date }}" readonly>
                </div>

                <!-- Class -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Class</label>
                    <input type="text" class="form-control" value="{{ ucfirst($flight->class) }}" readonly>
                </div>
                <!-- Price -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Price</label>
                    <input type="text" class="form-control" value="£{{ $flight->price }}" readonly>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <label class="form-label fw-bold">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone" required>
                </div>

                <!-- Submit -->
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary w-100 py-2">✈ Confirm Booking</button>
                </div>
            </div>
        </form>
    </div>
</div>


        <!-- Footer Start -->
        <div class="container-fluid footer py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Get In Touch</h4>
                            <a href=""><i class="fas fa-home me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Company</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Careers</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Press</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Gift Cards</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Magazine</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Support</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Contact</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Legal Notice</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Terms and Conditions</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Sitemap</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Cookie policy</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <div class="row gy-3 gx-2 mb-4">
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">Arabic</option>
                                                <option value="2">German</option>
                                                <option value="3">Greek</option>
                                                <option value="3">New York</option>
                                            </select>
                                            <label for="select1">English</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xl-6">
                                    <form>
                                        <div class="form-floating">
                                            <select class="form-select bg-dark border" id="select1">
                                                <option value="1">USD</option>
                                                <option value="2">EUR</option>
                                                <option value="3">INR</option>
                                                <option value="3">GBP</option>
                                            </select>
                                            <label for="select1">$</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <h4 class="text-white mb-3">Payments</h4>
                            <div class="footer-bank-card">
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-amex fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-visa fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fas fa-credit-card fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-mastercard fa-2x"></i></a>
                                <a href="#" class="text-white me-2"><i class="fab fa-cc-paypal fa-2x"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-cc-discover fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright text-body py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <i class="fas fa-copyright me-2"></i><a class="text-white" href="#">Your Site Name</a>, All right reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-start">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <!-- Flatpickr JS -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    flatpickr("#datetime", {
        enableTime: false,
        dateFormat: "Y-m-d ",
    });
</script> -->
<script>
    $(document).ready(function () {
        $('label[for="departure_date"]').click(function () {
            $('#departure_date').trigger('focus');
        });
        $('label[for="return_date"]').click(function () {
            $('#return_date').trigger('focus');
        });
    });

   
    function toggleReturnDate() {
        const returnDateDiv = document.getElementById('returnDateField');
        const isRoundTrip = document.getElementById('roundTrip').checked;
        returnDateDiv.style.display = isRoundTrip ? 'block' : 'none';
    }

    // Call once on page load to hide if needed
    document.addEventListener("DOMContentLoaded", function() {
        toggleReturnDate();
    });

    
    function toggleReturnDate() {
        const returnDateDiv = document.getElementById('returnDateField');
        const isRoundTrip = document.getElementById('roundTrip').checked;

        if (isRoundTrip) {
            returnDateDiv.style.visibility = 'visible';
        } else {
            returnDateDiv.style.visibility = 'hidden';
        }
    }

    // Run once when page loads
    document.addEventListener("DOMContentLoaded", function() {
        toggleReturnDate();
    });


</script>

    </body>

</html>