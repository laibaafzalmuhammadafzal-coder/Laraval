
@include('partials.header')

<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Cleaning Services</h2>

    <div class="row">

        <!-- Cleaner Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner1.jpg') }}" class="card-img-top" alt="Cleaner 1">
                <div class="card-body">
                    <h5 class="card-title">Home Cleaning</h5>
                    <p class="card-text">Complete home cleaning services for a spotless house.</p>
                    <a href="{{ url('/booking/cleaner/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner2.jpg') }}" class="card-img-top" alt="Cleaner 2">
                <div class="card-body">
                    <h5 class="card-title">Office Cleaning</h5>
                    <p class="card-text">Professional cleaning for offices and workspaces.</p>
                    <a href="{{ url('/booking/cleaner/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner3.jpg') }}" class="card-img-top" alt="Cleaner 3">
                <div class="card-body">
                    <h5 class="card-title">Kitchen Cleaning</h5>
                    <p class="card-text">Deep cleaning for kitchens and cooking areas.</p>
                    <a href="{{ url('/booking/cleaner/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner4.jpg') }}" class="card-img-top" alt="Cleaner 4">
                <div class="card-body">
                    <h5 class="card-title">Bathroom Cleaning</h5>
                    <p class="card-text">Sanitized and thorough bathroom cleaning services.</p>
                    <a href="{{ url('/booking/cleaner/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner5.jpg') }}" class="card-img-top" alt="Cleaner 5">
                <div class="card-body">
                    <h5 class="card-title">Window Cleaning</h5>
                    <p class="card-text">Sparkling window cleaning for homes and offices.</p>
                    <a href="{{ url('/booking/cleaner/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner6.jpg') }}" class="card-img-top" alt="Cleaner 6">
                <div class="card-body">
                    <h5 class="card-title">Carpet & Upholstery Cleaning</h5>
                    <p class="card-text">Deep cleaning for carpets, sofas, and upholstery.</p>
                    <a href="{{ url('/booking/cleaner/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner7.jpg') }}" class="card-img-top" alt="Cleaner 7">
                <div class="card-body">
                    <h5 class="card-title">Garden Cleaning</h5>
                    <p class="card-text">Maintain a clean and tidy garden space at home.</p>
                    <a href="{{ url('/booking/cleaner/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner8.jpg') }}" class="card-img-top" alt="Cleaner 8">
                <div class="card-body">
                    <h5 class="card-title">Move-In / Move-Out Cleaning</h5>
                    <p class="card-text">Thorough cleaning services when moving homes.</p>
                    <a href="{{ url('/booking/cleaner/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cleaner Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaner9.jpg') }}" class="card-img-top" alt="Cleaner 9">
                <div class="card-body">
                    <h5 class="card-title">General Home Cleaning</h5>
                    <p class="card-text">Regular cleaning services to keep your home fresh.</p>
                    <a href="{{ url('/booking/cleaner/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
