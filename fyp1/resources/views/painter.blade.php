
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Painting Services</h2>

    <div class="row">

        <!-- Painter Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter1.jpg') }}" class="card-img-top" alt="Painter 1">
                <div class="card-body">
                    <h5 class="card-title">Home Painting</h5>
                    <p class="card-text">Professional interior and exterior home painting services.</p>
                    <a href="{{ url('/booking/painter/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter2.jpg') }}" class="card-img-top" alt="Painter 2">
                <div class="card-body">
                    <h5 class="card-title">Office Painting</h5>
                    <p class="card-text">Quality painting services for offices and commercial spaces.</p>
                    <a href="{{ url('/booking/painter/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter3.jpg') }}" class="card-img-top" alt="Painter 3">
                <div class="card-body">
                    <h5 class="card-title">Wall Texture & Design</h5>
                    <p class="card-text">Creative wall textures and designs to beautify your space.</p>
                    <a href="{{ url('/booking/painter/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter4.jpg') }}" class="card-img-top" alt="Painter 4">
                <div class="card-body">
                    <h5 class="card-title">Exterior Painting</h5>
                    <p class="card-text">Durable and weather-resistant painting for building exteriors.</p>
                    <a href="{{ url('/booking/painter/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter5.jpg') }}" class="card-img-top" alt="Painter 5">
                <div class="card-body">
                    <h5 class="card-title">Furniture Painting</h5>
                    <p class="card-text">Professional painting and refinishing for furniture pieces.</p>
                    <a href="{{ url('/booking/painter/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter6.jpg') }}" class="card-img-top" alt="Painter 6">
                <div class="card-body">
                    <h5 class="card-title">Ceiling & Roof Painting</h5>
                    <p class="card-text">Professional painting for ceilings, roofs, and high walls.</p>
                    <a href="{{ url('/booking/painter/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter7.jpg') }}" class="card-img-top" alt="Painter 7">
                <div class="card-body">
                    <h5 class="card-title">Decorative Painting</h5>
                    <p class="card-text">Custom decorative and artistic painting for interiors.</p>
                    <a href="{{ url('/booking/painter/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter8.jpg') }}" class="card-img-top" alt="Painter 8">
                <div class="card-body">
                    <h5 class="card-title">Wall Art & Murals</h5>
                    <p class="card-text">Beautiful murals and wall art to personalize your space.</p>
                    <a href="{{ url('/booking/painter/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Painter Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/painter9.jpg') }}" class="card-img-top" alt="Painter 9">
                <div class="card-body">
                    <h5 class="card-title">Maintenance Painting</h5>
                    <p class="card-text">Touch-ups and maintenance painting to keep surfaces fresh.</p>
                    <a href="{{ url('/booking/painter/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
