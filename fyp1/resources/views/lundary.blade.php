
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Laundry Services</h2>

    <div class="row">

        <!-- Laundry Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry1.jpg') }}" class="card-img-top" alt="Laundry 1">
                <div class="card-body">
                    <h5 class="card-title">Washing & Drying</h5>
                    <p class="card-text">Professional washing and drying of clothes with care.</p>
                    <a href="{{ url('/booking/laundry/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry2.jpg') }}" class="card-img-top" alt="Laundry 2">
                <div class="card-body">
                    <h5 class="card-title">Ironing & Pressing</h5>
                    <p class="card-text">Perfectly ironed and pressed clothes for a neat look.</p>
                    <a href="{{ url('/booking/laundry/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry3.jpg') }}" class="card-img-top" alt="Laundry 3">
                <div class="card-body">
                    <h5 class="card-title">Dry Cleaning</h5>
                    <p class="card-text">Professional dry cleaning for delicate and premium fabrics.</p>
                    <a href="{{ url('/booking/laundry/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry4.jpg') }}" class="card-img-top" alt="Laundry 4">
                <div class="card-body">
                    <h5 class="card-title">Stain Removal</h5>
                    <p class="card-text">Effective removal of tough stains from clothes and fabrics.</p>
                    <a href="{{ url('/booking/laundry/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry5.jpg') }}" class="card-img-top" alt="Laundry 5">
                <div class="card-body">
                    <h5 class="card-title">Blanket & Bedding Cleaning</h5>
                    <p class="card-text">Deep cleaning of blankets, bedsheets, and comforters.</p>
                    <a href="{{ url('/booking/laundry/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry6.jpg') }}" class="card-img-top" alt="Laundry 6">
                <div class="card-body">
                    <h5 class="card-title">Curtains & Drapes</h5>
                    <p class="card-text">Professional cleaning of curtains and drapes for freshness.</p>
                    <a href="{{ url('/booking/laundry/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry7.jpg') }}" class="card-img-top" alt="Laundry 7">
                <div class="card-body">
                    <h5 class="card-title">Special Fabric Care</h5>
                    <p class="card-text">Careful cleaning for silk, wool, and other delicate fabrics.</p>
                    <a href="{{ url('/booking/laundry/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry8.jpg') }}" class="card-img-top" alt="Laundry 8">
                <div class="card-body">
                    <h5 class="card-title">Uniform Cleaning</h5>
                    <p class="card-text">Cleaning of office and school uniforms for a fresh look.</p>
                    <a href="{{ url('/booking/laundry/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Laundry Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/laundry9.jpg') }}" class="card-img-top" alt="Laundry 9">
                <div class="card-body">
                    <h5 class="card-title">Pickup & Delivery</h5>
                    <p class="card-text">Convenient laundry pickup and delivery services at your doorstep.</p>
                    <a href="{{ url('/booking/laundry/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')
