
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Cooking Services</h2>

    <div class="row">

        <!-- Cooking Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking1.jpg') }}" class="card-img-top" alt="Cooking 1">
                <div class="card-body">
                    <h5 class="card-title">Home Chef</h5>
                    <p class="card-text">Delicious homemade meals prepared fresh daily.</p>
                    <a href="{{ url('/booking/cooking/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking2.jpg') }}" class="card-img-top" alt="Cooking 2">
                <div class="card-body">
                    <h5 class="card-title">Meal Prep Service</h5>
                    <p class="card-text">Healthy and balanced meal prep for the week.</p>
                    <a href="{{ url('/booking/cooking/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking3.jpg') }}" class="card-img-top" alt="Cooking 3">
                <div class="card-body">
                    <h5 class="card-title">Baking Expert</h5>
                    <p class="card-text">Cakes, pastries, and baked goods for all occasions.</p>
                    <a href="{{ url('/booking/cooking/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking4.jpg') }}" class="card-img-top" alt="Cooking 4">
                <div class="card-body">
                    <h5 class="card-title">Catering Service</h5>
                    <p class="card-text">Catering for parties, events, and family gatherings.</p>
                    <a href="{{ url('/booking/cooking/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking5.jpg') }}" class="card-img-top" alt="Cooking 5">
                <div class="card-body">
                    <h5 class="card-title">Healthy Chef</h5>
                    <p class="card-text">Nutritious meals tailored to dietary needs.</p>
                    <a href="{{ url('/booking/cooking/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking6.jpg') }}" class="card-img-top" alt="Cooking 6">
                <div class="card-body">
                    <h5 class="card-title">International Cuisine</h5>
                    <p class="card-text">Authentic dishes from around the world at your home.</p>
                    <a href="{{ url('/booking/cooking/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking7.jpg') }}" class="card-img-top" alt="Cooking 7">
                <div class="card-body">
                    <h5 class="card-title">Dessert Specialist</h5>
                    <p class="card-text">Specialized desserts, puddings, and sweet treats.</p>
                    <a href="{{ url('/booking/cooking/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking8.jpg') }}" class="card-img-top" alt="Cooking 8">
                <div class="card-body">
                    <h5 class="card-title">Meal Delivery Service</h5>
                    <p class="card-text">Prepared meals delivered fresh to your doorstep.</p>
                    <a href="{{ url('/booking/cooking/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Cooking Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cooking9.jpg') }}" class="card-img-top" alt="Cooking 9">
                <div class="card-body">
                    <h5 class="card-title">Personal Chef</h5>
                    <p class="card-text">Dedicated personal chef for daily meals or events.</p>
                    <a href="{{ url('/booking/cooking/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
