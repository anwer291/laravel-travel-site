@extends('layouts.main')
@section('main-section')

<div class="carousel-header position-relative">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-2 text-capitalize text-white mb-4">Let's The World Together!</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-2 text-capitalize text-white mb-4">Find Your Perfect Tour At Travel</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-2 text-capitalize text-white mb-4">Explore The World</h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    @include('components.booking-form')

<!-- About Us Start -->
<div class="container-fluid about mt-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                    <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">About Us</h5>
                <h1 class="mb-4">Welcome to <span class="text-primary">SevenZones</span></h1>
                <p class="mb-4">Seven zones travel under the guidance of over 10 years’ experience team is providing best international travel solutions to meet the expectations of our customers.

</p>
                <p class="mb-4">We at Seven zones Travel believe in the dominant importance to keep Quality equivalent to Value and try to attain and retain clients with the same motive, provide best quality with best value.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ route('about') }}">Read More</a>
            </div>
        </div>
    </div>
</div>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Search Results</h1>
                   
            </div>
         </div>
        <!-- Header End -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    <!-- Flight Search Form (on top of banner) -->
<div class="position-absolute start-50 translate-middle w-100 px-4" style="top: 110%; z-index: 10;">
        <form method="POST" action="{{ route('flights.search') }}"
              class="mx-auto shadow-lg rounded-4 text-white"
              style="max-width: 1000px;
                     background: rgba(13, 110, 253, 0.2);
                     backdrop-filter: blur(10px);
                     -webkit-backdrop-filter: blur(10px);
                     padding: 30px;">
            @csrf

            <!-- Trip Type -->
            <div class="mb-3 text-center" >
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="trip_type" id="roundTrip" value="round" checked onchange="toggleReturnDate()">
                    <label class="form-check-label" for="roundTrip">Return</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="trip_type" id="oneWay" value="oneway" onchange="toggleReturnDate()">
                    <label class="form-check-label" for="oneWay">One Way</label>
                </div>
            </div>

            @php
                $today = date('Y-m-d');
            @endphp

            <div class="row g-3 row-cols-1 row-cols-md-3">
                <div class="col">
                    <input type="text" class="form-control" name="departure_from" placeholder="Departure From" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="arrive_to" placeholder="Flying To" required>
                </div>
                <div class="col">
                    <input type="date" min="{{ $today }}" class="form-control bg-white border-0" id="departure_date" name="departure_date" required onclick="this.showPicker()">
                </div>
                <div class="col" id="returnDateField">
                    <input type="date" min="{{ $today }}" class="form-control bg-white border-0" id="return_date" name="return_date" onclick="this.showPicker()">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="airline" placeholder="Any Airline">
                </div>
                <div class="col">
                    <select name="class" class="form-select">
                        <option value="">Any Class</option>
                        <option value="economy">Economy</option>
                        <option value="business">Business</option>
                    </select>
                </div>
                <div class="col">
                    <input type="number" class="form-control" name="passengers" placeholder="Total Passengers" min="1" required>
                </div>
                <div class="col">
                    <input type="tel" class="form-control" name="phone" placeholder="Enter your phone" required>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-light w-100 py-3">🔍 Search Now</button>
            </div>
        </form>
    </div>
</div>
<!-- Carousel End -->

       
@include('components.flight-result')

@endsection