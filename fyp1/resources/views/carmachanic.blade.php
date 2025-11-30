@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Car Mechanic Services</h2>

    <div class="row">

        <!-- Carmachanic Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic1.jpg') }}" class="card-img-top" alt="Car Mechanic 1">
                <div class="card-body">
                    <h5 class="card-title">Engine Repair</h5>
                    <p class="card-text">Professional engine repair for all car models.</p>
                    <a href="{{ url('/booking/carmachanic/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic2.jpg') }}" class="card-img-top" alt="Car Mechanic 2">
                <div class="card-body">
                    <h5 class="card-title">AC Repair & Maintenance</h5>
                    <p class="card-text">Keep your car cool with expert AC services.</p>
                    <a href="{{ url('/booking/carmachanic/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic3.jpg') }}" class="card-img-top" alt="Car Mechanic 3">
                <div class="card-body">
                    <h5 class="card-title">Oil Change</h5>
                    <p class="card-text">Fast and reliable oil change services.</p>
                    <a href="{{ url('/booking/carmachanic/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic4.jpg') }}" class="card-img-top" alt="Car Mechanic 4">
                <div class="card-body">
                    <h5 class="card-title">Brake Repair</h5>
                    <p class="card-text">Ensure your safety with expert brake services.</p>
                    <a href="{{ url('/booking/carmachanic/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic5.jpg') }}" class="card-img-top" alt="Car Mechanic 5">
                <div class="card-body">
                    <h5 class="card-title">Battery Replacement</h5>
                    <p class="card-text">Quick and reliable battery replacement services.</p>
                    <a href="{{ url('/booking/carmachanic/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic6.jpg') }}" class="card-img-top" alt="Car Mechanic 6">
                <div class="card-body">
                    <h5 class="card-title">Tire Repair & Replacement</h5>
                    <p class="card-text">Keep your tires in perfect condition with expert care.</p>
                    <a href="{{ url('/booking/carmachanic/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic7.jpg') }}" class="card-img-top" alt="Car Mechanic 7">
                <div class="card-body">
                    <h5 class="card-title">Transmission Repair</h5>
                    <p class="card-text">Professional transmission maintenance and repair.</p>
                    <a href="{{ url('/booking/carmachanic/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic8.jpg') }}" class="card-img-top" alt="Car Mechanic 8">
                <div class="card-body">
                    <h5 class="card-title">Suspension Repair</h5>
                    <p class="card-text">Smooth driving with expert suspension services.</p>
                    <a href="{{ url('/booking/carmachanic/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Carmachanic Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/carmachanic9.jpg') }}" class="card-img-top" alt="Car Mechanic 9">
                <div class="card-body">
                    <h5 class="card-title">Full Car Inspection</h5>
                    <p class="card-text">Comprehensive car inspection to avoid future problems.</p>
                    <a href="{{ url('/booking/carmachanic/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')