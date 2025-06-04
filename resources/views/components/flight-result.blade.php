<div class="container py-5">

    @if ($flights->count() > 0)
        <p class="text-center mb-4">Found {{ $flights->count() }} flights:</p>

        <div class="row">
            @foreach ($flights as $flight)
                <div class="col-md-6 col-lg-4">
                    <div class="flight-card position-relative bg-white p-3">
                        <div class="cheapest-badge">Cheapest</div>

                        <div class="d-flex align-items-center mb-3">
                            <img src="{{ $flight->image }}" alt="{{ $flight->airline }}" width="80" height="40" class="me-3">
                            <h5 class="mb-0 text-danger">Flights to {{ $flight->arrival_airport_name }}</h5>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <h4 class="mb-0">{{ $flight->departure_airport_code }}</h4>
                                <small>{{ $flight->departure_airport_name }}</small>
                            </div>
                            <div class="text-center">
                                <i class="bi bi-arrow-right fs-4"></i>
                                <div>via {{ $flight->via ?? 'Nonstop' }}</div>
                            </div>
                            <div>
                                <h4 class="mb-0">{{ $flight->arrival_airport_code }}</h4>
                                <small>{{ $flight->arrival_airport_name }}</small>
                            </div>
                        </div>

                        <div class="mb-2"><strong>Departure:</strong> {{ $flight->departure_date }}</div>
                        <div class="mb-2"><strong>Arrival:</strong> {{ $flight->arrival_date }}</div>
                        <div class="mb-2"><strong>Class:</strong> {{ ucfirst($flight->class) }}</div>
                        <div class="mb-2"><strong>Seats:</strong> {{ $flight->available_seats }}</div>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <div class="text-muted small">Prices From</div>
                                <div class="price-tag">$ {{ number_format($flight->price) }}</div>
                            </div>
                            <form method="GET" action="#">
                                <a href="{{ route('booking.form', $flight->id) }}" class="btn btn-success">Book Now</a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    @else
        <p class="text-center">No flights found for your search criteria.</p>
    @endif

    <div class="text-center mt-4">
        <a href="{{ route('flights.search.form') }}" class="btn btn-secondary">Back to Search</a>
    </div>
</div>
