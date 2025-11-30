
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Electrician Services</h2>

    <div class="row">

        <!-- Electrician Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele1.jpg') }}" class="card-img-top" alt="Electrition 1">
                <div class="card-body">
                    <h5 class="card-title">Home Wiring</h5>
                    <p class="card-text">Professional home wiring and electrical installation services.</p>
                    <a href="{{ url('/booking/electrition/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele2.jpg') }}" class="card-img-top" alt="Electrition 2">
                <div class="card-body">
                    <h5 class="card-title">Appliance Repair</h5>
                    <p class="card-text">Repair and maintenance for home electrical appliances.</p>
                    <a href="{{ url('/booking/electrition/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele3.jpg') }}" class="card-img-top" alt="Electrition 3">
                <div class="card-body">
                    <h5 class="card-title">Lighting Installation</h5>
                    <p class="card-text">Expert installation of indoor and outdoor lighting systems.</p>
                    <a href="{{ url('/booking/electrition/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele4.jpg') }}" class="card-img-top" alt="Electrition 4">
                <div class="card-body">
                    <h5 class="card-title">Fan & AC Installation</h5>
                    <p class="card-text">Professional installation and maintenance of fans and AC units.</p>
                    <a href="{{ url('/booking/electrition/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele5.jpg') }}" class="card-img-top" alt="Electrition 5">
                <div class="card-body">
                    <h5 class="card-title">Circuit Repair</h5>
                    <p class="card-text">Expert repair of electrical circuits and breakers.</p>
                    <a href="{{ url('/booking/electrition/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele6.jpg') }}" class="card-img-top" alt="Electrition 6">
                <div class="card-body">
                    <h5 class="card-title">Solar & Inverter Services</h5>
                    <p class="card-text">Installation, maintenance, and repair of generators and inverters.</p>
                    <a href="{{ url('/booking/electrition/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele7.jpg') }}" class="card-img-top" alt="Electrition 7">
                <div class="card-body">
                    <h5 class="card-title">Security System Installation</h5>
                    <p class="card-text">Installation and maintenance of home security systems.</p>
                    <a href="{{ url('/booking/electrition/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele8.jpg') }}" class="card-img-top" alt="Electrition 8">
                <div class="card-body">
                    <h5 class="card-title">Switch & Socket Repair</h5>
                    <p class="card-text">Repair and replacement of switches and sockets safely.</p>
                    <a href="{{ url('/booking/electrition/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Electrician Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/ele9.jpg') }}" class="card-img-top" alt="Electrition 9">
                <div class="card-body">
                    <h5 class="card-title">Emergency Electrical Services</h5>
                    <p class="card-text">Quick and reliable response for all electrical emergencies.</p>
                    <a href="{{ url('/booking/electrition/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
