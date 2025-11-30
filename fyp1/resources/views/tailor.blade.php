
@include('partials.header')
<div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Tailoring Services</h2>

    <div class="row">

        <!-- Tailor Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor1.jpg') }}" class="card-img-top" alt="Tailor 1">
                <div class="card-body">
                    <h5 class="card-title">Custom Stitching</h5>
                    <p class="card-text">Tailored outfits designed and stitched to perfection.</p>
                    <a href="{{ url('/booking/tailor/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor2.jpg') }}" class="card-img-top" alt="Tailor 2">
                <div class="card-body">
                    <h5 class="card-title">Alterations & Repairs</h5>
                    <p class="card-text">Professional clothing alterations and repairs for all garments.</p>
                    <a href="{{ url('/booking/tailor/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor3.jpg') }}" class="card-img-top" alt="Tailor 3">
                <div class="card-body">
                    <h5 class="card-title">Bridal & Formal Wear</h5>
                    <p class="card-text">Custom bridal, formal, and party outfits for special occasions.</p>
                    <a href="{{ url('/booking/tailor/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor4.jpg') }}" class="card-img-top" alt="Tailor 4">
                <div class="card-body">
                    <h5 class="card-title">Men’s Clothing</h5>
                    <p class="card-text">Custom tailoring for men’s shirts, pants, and suits.</p>
                    <a href="{{ url('/booking/tailor/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor5.jpg') }}" class="card-img-top" alt="Tailor 5">
                <div class="card-body">
                    <h5 class="card-title">Women’s Clothing</h5>
                    <p class="card-text">Custom stitching for women’s dresses, suits, and traditional outfits.</p>
                    <a href="{{ url('/booking/tailor/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor6.jpg') }}" class="card-img-top" alt="Tailor 6">
                <div class="card-body">
                    <h5 class="card-title">Children’s Clothing</h5>
                    <p class="card-text">Tailored clothing for kids including dresses, pants, and shirts.</p>
                    <a href="{{ url('/booking/tailor/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor7.jpg') }}" class="card-img-top" alt="Tailor 7">
                <div class="card-body">
                    <h5 class="card-title">Embroidery Services</h5>
                    <p class="card-text">Custom embroidery and decorative stitching for garments.</p>
                    <a href="{{ url('/booking/tailor/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor8.jpg') }}" class="card-img-top" alt="Tailor 8">
                <div class="card-body">
                    <h5 class="card-title">Fabric Consultation</h5>
                    <p class="card-text">Guidance on fabric choice, styles, and stitching techniques.</p>
                    <a href="{{ url('/booking/tailor/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Tailor Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/tailor9.jpg') }}" class="card-img-top" alt="Tailor 9">
                <div class="card-body">
                    <h5 class="card-title">Special Occasion Tailoring</h5>
                    <p class="card-text">Tailoring services for weddings, parties, and formal events.</p>
                    <a href="{{ url('/booking/tailor/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    </div>
</div>

@include('partials.footer')
