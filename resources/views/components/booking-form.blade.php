
    <!-- Flight Search Form (on top of banner) -->
<div class="position-absolute start-50 translate-middle w-100 px-4" style="top: 87%; z-index: 10;">
        <form method="POST" action="{{ route('flights.search') }}"
              class="mx-auto shadow-lg rounded-4 text-white"
              style="max-width: 1000px;
                     background: rgba(13, 110, 253, 0.2);
                     backdrop-filter: blur(10px);
                     -webkit-backdrop-filter: blur(10px);
                     padding: 30px;">
            @csrf

            <!-- Trip Type -->
            <div class="mb-3 text-center">
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
