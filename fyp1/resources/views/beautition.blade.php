@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Beautification Services</h2>

    <div class="row">

        <!-- Beautification Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition1.jpg') }}" class="card-img-top" alt="Beautician 1">
                <div class="card-body">
                    <h5 class="card-title">Hair Styling Expert</h5>
                    <p class="card-text">Professional hairstyling and hair care services.</p>
                    <a href="{{ url('/booking/beautition/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition2.jpg') }}" class="card-img-top" alt="Beautician 2">
                <div class="card-body">
                    <h5 class="card-title">Makeup Artist</h5>
                    <p class="card-text">Expert makeup services for all occasions.</p>
                    <a href="{{ url('/booking/beautition/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition3.jpg') }}" class="card-img-top" alt="Beautician 3">
                <div class="card-body">
                    <h5 class="card-title">Nail Care Specialist</h5>
                    <p class="card-text">Manicure, pedicure, and nail art services.</p>
                    <a href="{{ url('/booking/beautition/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition4.jpg') }}" class="card-img-top" alt="Beautician 4">
                <div class="card-body">
                    <h5 class="card-title">Skin Care Expert</h5>
                    <p class="card-text">Facials and skin treatments for glowing skin.</p>
                    <a href="{{ url('/booking/beautition/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition5.jpg') }}" class="card-img-top" alt="Beautician 5">
                <div class="card-body">
                    <h5 class="card-title">Bridal Makeup Specialist</h5>
                    <p class="card-text">Professional bridal makeup and styling services.</p>
                    <a href="{{ url('/booking/beautition/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition6.jpg') }}" class="card-img-top" alt="Beautician 6">
                <div class="card-body">
                    <h5 class="card-title">Hair Coloring Expert</h5>
                    <p class="card-text">Professional hair coloring and treatments.</p>
                    <a href="{{ url('/booking/beautition/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition7.jpg') }}" class="card-img-top" alt="Beautician 7">
                <div class="card-body">
                    <h5 class="card-title">Threading & Waxing</h5>
                    <p class="card-text">Professional facial hair removal and skin care.</p>
                    <a href="{{ url('/booking/beautition/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition8.jpg') }}" class="card-img-top" alt="Beautician 8">
                <div class="card-body">
                    <h5 class="card-title">Spa & Massage</h5>
                    <p class="card-text">Relaxing spa and massage services at home.</p>
                    <a href="{{ url('/booking/beautition/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Beautification Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/beautition9.jpg') }}" class="card-img-top" alt="Beautician 9">
                <div class="card-body">
                    <h5 class="card-title">Party Makeup Artist</h5>
                    <p class="card-text">Glamorous makeup services for parties and events.</p>
                    <a href="{{ url('/booking/beautition/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')