<h2>Booking Confirmation</h2>
<p>Thank you for booking with us!</p>

<p><strong>Flight:</strong> {{ $flight->airline }}</p>
<p><strong>From:</strong> {{ $flight->departure_airport_name }} ({{ $flight->departure_airport_code }})</p>
<p><strong>To:</strong> {{ $flight->arrival_airport_name }} ({{ $flight->arrival_airport_code }})</p>
<p><strong>Departure Date:</strong> {{ $flight->departure_date }}</p>
<p><strong>Arrival Date:</strong> {{ $flight->arrival_date }}</p>
<p><strong>Phone:</strong> {{ $phone }}</p>

<p>We will contact you soon.</p>
