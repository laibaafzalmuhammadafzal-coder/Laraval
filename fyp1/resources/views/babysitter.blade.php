@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Baby Sitter Services</h2>

    <div class="row">

        <!-- Babysitter Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter1.jpg') }}" class="card-img-top" alt="Baby Sitter 1">
                <div class="card-body">
                    <h5 class="card-title">Experienced Babysitter</h5>
                    <p class="card-text">Trusted babysitter for children aged 1-10 years.</p>
                    <a href="{{ url('/booking/babysitter/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter2.jpg') }}" class="card-img-top" alt="Baby Sitter 2">
                <div class="card-body">
                    <h5 class="card-title">Part-Time Babysitter</h5>
                    <p class="card-text">Flexible timings, ideal for working parents.</p>
                    <a href="{{ url('/booking/babysitter/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter3.jpg') }}" class="card-img-top" alt="Baby Sitter 3">
                <div class="card-body">
                    <h5 class="card-title">Night Shift Babysitter</h5>
                    <p class="card-text">Professional babysitter for overnight care.</p>
                    <a href="{{ url('/booking/babysitter/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter4.jpg') }}" class="card-img-top" alt="Baby Sitter 4">
                <div class="card-body">
                    <h5 class="card-title">Creative Babysitter</h5>
                    <p class="card-text">Engaging activities for children during babysitting.</p>
                    <a href="{{ url('/booking/babysitter/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter5.jpg') }}" class="card-img-top" alt="Baby Sitter 5">
                <div class="card-body">
                    <h5 class="card-title">Experienced Nanny</h5>
                    <p class="card-text">Qualified nanny for newborns and toddlers.</p>
                    <a href="{{ url('/booking/babysitter/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter6.jpg') }}" class="card-img-top" alt="Baby Sitter 6">
                <div class="card-body">
                    <h5 class="card-title">Weekend Babysitter</h5>
                    <p class="card-text">Perfect for weekend child care services.</p>
                    <a href="{{ url('/booking/babysitter/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter7.jpg') }}" class="card-img-top" alt="Baby Sitter 7">
                <div class="card-body">
                    <h5 class="card-title">Full-Time Babysitter</h5>
                    <p class="card-text">Reliable full-time babysitter for daily needs.</p>
                    <a href="{{ url('/booking/babysitter/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter8.jpg') }}" class="card-img-top" alt="Baby Sitter 8">
                <div class="card-body">
                    <h5 class="card-title">Tutoring Babysitter</h5>
                    <p class="card-text">Babysitter who also helps with homework and learning.</p>
                    <a href="{{ url('/booking/babysitter/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Babysitter Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/babysitter9.jpg') }}" class="card-img-top" alt="Baby Sitter 9">
                <div class="card-body">
                    <h5 class="card-title">Trusted Babysitter</h5>
                    <p class="card-text">Safe and caring babysitter for your little ones.</p>
                    <a href="{{ url('/booking/babysitter/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>
@include('partials.footer')