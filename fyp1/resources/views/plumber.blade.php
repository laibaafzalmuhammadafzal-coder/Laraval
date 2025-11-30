
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Plumbing Services</h2>

    <div class="row">

        <!-- Plumber Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber1.jpg') }}" class="card-img-top" alt="Plumber 1">
                <div class="card-body">
                    <h5 class="card-title">Leak Repairs</h5>
                    <p class="card-text">Quick and efficient repair of water leaks in pipes and faucets.</p>
                    <a href="{{ url('/booking/plumber/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber2.jpg') }}" class="card-img-top" alt="Plumber 2">
                <div class="card-body">
                    <h5 class="card-title">Drain Cleaning</h5>
                    <p class="card-text">Professional cleaning and unclogging of drains and pipes.</p>
                    <a href="{{ url('/booking/plumber/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber3.jpg') }}" class="card-img-top" alt="Plumber 3">
                <div class="card-body">
                    <h5 class="card-title">Toilet Repairs</h5>
                    <p class="card-text">Expert repair of toilets, flush systems, and fittings.</p>
                    <a href="{{ url('/booking/plumber/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber4.jpg') }}" class="card-img-top" alt="Plumber 4">
                <div class="card-body">
                    <h5 class="card-title">Pipe Installation</h5>
                    <p class="card-text">Professional installation of water supply and drainage pipes.</p>
                    <a href="{{ url('/booking/plumber/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber5.jpg') }}" class="card-img-top" alt="Plumber 5">
                <div class="card-body">
                    <h5 class="card-title">Water Heater Installation</h5>
                    <p class="card-text">Installation and repair of geysers and water heaters.</p>
                    <a href="{{ url('/booking/plumber/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber6.jpg') }}" class="card-img-top" alt="Plumber 6">
                <div class="card-body">
                    <h5 class="card-title">Bathroom Renovation</h5>
                    <p class="card-text">Plumbing support for full bathroom renovation projects.</p>
                    <a href="{{ url('/booking/plumber/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber7.jpg') }}" class="card-img-top" alt="Plumber 7">
                <div class="card-body">
                    <h5 class="card-title">Kitchen Plumbing</h5>
                    <p class="card-text">Installation and repair of kitchen sinks, faucets, and pipes.</p>
                    <a href="{{ url('/booking/plumber/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber8.jpg') }}" class="card-img-top" alt="Plumber 8">
                <div class="card-body">
                    <h5 class="card-title">Emergency Plumbing</h5>
                    <p class="card-text">24/7 emergency plumbing services for urgent situations.</p>
                    <a href="{{ url('/booking/plumber/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Plumber Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/plumber9.jpg') }}" class="card-img-top" alt="Plumber 9">
                <div class="card-body">
                    <h5 class="card-title">Pipe Replacement</h5>
                    <p class="card-text">Replacement of old or damaged water and drainage pipes.</p>
                    <a href="{{ url('/booking/plumber/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
