
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Driver Services</h2>

    <div class="row">

        <!-- Driver Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver1.jpg') }}" class="card-img-top" alt="Driver 1">
                <div class="card-body">
                    <h5 class="card-title">Personal Driver</h5>
                    <p class="card-text">Reliable personal driver for daily commute.</p>
                    <a href="{{ url('/booking/driver/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver2.jpg') }}" class="card-img-top" alt="Driver 2">
                <div class="card-body">
                    <h5 class="card-title">Event Driver</h5>
                    <p class="card-text">Professional drivers for weddings, parties, and events.</p>
                    <a href="{{ url('/booking/driver/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver3.jpg') }}" class="card-img-top" alt="Driver 3">
                <div class="card-body">
                    <h5 class="card-title">Airport Pickup & Drop</h5>
                    <p class="card-text">Safe and timely airport transportation services.</p>
                    <a href="{{ url('/booking/driver/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver4.jpg') }}" class="card-img-top" alt="Driver 4">
                <div class="card-body">
                    <h5 class="card-title">Long Distance Driver</h5>
                    <p class="card-text">Experienced drivers for intercity and long-distance trips.</p>
                    <a href="{{ url('/booking/driver/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver5.jpg') }}" class="card-img-top" alt="Driver 5">
                <div class="card-body">
                    <h5 class="card-title">Courier & Delivery Driver</h5>
                    <p class="card-text">Professional delivery drivers for packages and documents.</p>
                    <a href="{{ url('/booking/driver/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver6.jpg') }}" class="card-img-top" alt="Driver 6">
                <div class="card-body">
                    <h5 class="card-title">Corporate Driver</h5>
                    <p class="card-text">Professional drivers for office and corporate transportation.</p>
                    <a href="{{ url('/booking/driver/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver7.jpg') }}" class="card-img-top" alt="Driver 7">
                <div class="card-body">
                    <h5 class="card-title">VIP Driver</h5>
                    <p class="card-text">Experienced drivers for VIP and luxury transportation.</p>
                    <a href="{{ url('/booking/driver/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver8.jpg') }}" class="card-img-top" alt="Driver 8">
                <div class="card-body">
                    <h5 class="card-title">Part-Time Driver</h5>
                    <p class="card-text">Flexible driver services for part-time or hourly needs.</p>
                    <a href="{{ url('/booking/driver/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver9.jpg') }}" class="card-img-top" alt="Driver 9">
                <div class="card-body">
                    <h5 class="card-title">Night Shift Driver</h5>
                    <p class="card-text">Safe and reliable drivers for late-night transportation.</p>
                    <a href="{{ url('/booking/driver/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')
