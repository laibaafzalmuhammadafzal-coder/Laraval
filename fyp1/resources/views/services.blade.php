@include('partials.header')
<!-- Services Start -->
    <div class="container my-5">
    <h2 class="text-primary mb-4 text-center">Our Services</h2>

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
        

        <!-- Cleaner Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaning1.jpg') }}" class="card-img-top" alt="Cleaner 1">
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
                <img src="{{ asset('img/cleaning2.jpg') }}" class="card-img-top" alt="Cleaner 2">
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
                <img src="{{ asset('img/cleaning3.jpg') }}" class="card-img-top" alt="Cleaner 3">
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
                <img src="{{ asset('img/cleaning4.jpg') }}" class="card-img-top" alt="Cleaner 4">
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
                <img src="{{ asset('img/cleaning5.jpg') }}" class="card-img-top" alt="Cleaner 5">
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
                <img src="{{ asset('img/cleaning6.jpg') }}" class="card-img-top" alt="Cleaner 6">
                <div class="card-body">
                    <h5 class="card-title">Carpet & Upholstery Cleaning</h5>
                    <p class="card-text">Deep cleaning for carpets, sofas, and upholstery.</p>
                    <a href="{{ url('/booking/cleaner/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
       

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
        
        <!-- Driver Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver1.jpg') }}" class="card-img-top" alt="Driver 1">
                <div class="card-body">
                    <h5 class="card-title">Personal Driver</h5>
                    <p class="card-text">Reliable personal driver for daily commute.</p>
                    <a href="{{ url('/booking/driver/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver2.jpg') }}" class="card-img-top" alt="Driver 2">
                <div class="card-body">
                    <h5 class="card-title">Event Driver</h5>
                    <p class="card-text">Professional drivers for weddings, parties, and events.</p>
                    <a href="{{ url('/booking/driver/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver3.jpg') }}" class="card-img-top" alt="Driver 3">
                <div class="card-body">
                    <h5 class="card-title">Airport Pickup & Drop</h5>
                    <p class="card-text">Safe and timely airport transportation services.</p>
                    <a href="{{ url('/booking/driver/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver4.jpg') }}" class="card-img-top" alt="Driver 4">
                <div class="card-body">
                    <h5 class="card-title">Long Distance Driver</h5>
                    <p class="card-text">Experienced drivers for intercity and long-distance trips.</p>
                    <a href="{{ url('/booking/driver/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
       

        <!-- Home Shifting Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting1.jpg') }}" class="card-img-top" alt="Home Shifting 1">
                <div class="card-body">
                    <h5 class="card-title">Local House Moving</h5>
                    <p class="card-text">Efficient and safe moving within the city.</p>
                    <a href="{{ url('/booking/homeshiffting/1') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting2.jpg') }}" class="card-img-top" alt="Home Shifting 2">
                <div class="card-body">
                    <h5 class="card-title">Intercity Moving</h5>
                    <p class="card-text">Safe and timely moving between cities.</p>
                    <a href="{{ url('/booking/homeshiffting/2') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting3.jpg') }}" class="card-img-top" alt="Home Shifting 3">
                <div class="card-body">
                    <h5 class="card-title">Packing Services</h5>
                    <p class="card-text">Professional packing of furniture, appliances, and fragile items.</p>
                    <a href="{{ url('/booking/homeshiffting/3') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting4.jpg') }}" class="card-img-top" alt="Home Shifting 4">
                <div class="card-body">
                    <h5 class="card-title">Unpacking Services</h5>
                    <p class="card-text">Efficient unpacking and setup at your new home.</p>
                    <a href="{{ url('/booking/homeshiffting/4') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting5.jpg') }}" class="card-img-top" alt="Home Shifting 5">
                <div class="card-body">
                    <h5 class="card-title">Furniture Moving</h5>
                    <p class="card-text">Careful moving and handling of heavy furniture items.</p>
                    <a href="{{ url('/booking/homeshiffting/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        
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


        <!-- Home Shifting Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting6.jpg') }}" class="card-img-top" alt="Home Shifting 6">
                <div class="card-body">
                    <h5 class="card-title">Appliance Moving</h5>
                    <p class="card-text">Safe transportation of refrigerators, washing machines, and other appliances.</p>
                    <a href="{{ url('/booking/homeshiffting/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting7.jpg') }}" class="card-img-top" alt="Home Shifting 7">
                <div class="card-body">
                    <h5 class="card-title">Office Moving</h5>
                    <p class="card-text">Professional shifting services for offices and commercial spaces.</p>
                    <a href="{{ url('/booking/homeshiffting/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting8.jpg') }}" class="card-img-top" alt="Home Shifting 8">
                <div class="card-body">
                    <h5 class="card-title">Loading & Unloading</h5>
                    <p class="card-text">Efficient loading and unloading of all items during the move.</p>
                    <a href="{{ url('/booking/homeshiffting/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Home Shifting Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/homeshifting9.jpg') }}" class="card-img-top" alt="Home Shifting 9">
                <div class="card-body">
                    <h5 class="card-title">Full-Service Moving</h5>
                    <p class="card-text">Complete home shifting service including packing, moving, and unpacking.</p>
                    <a href="{{ url('/booking/homeshiffting/9') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

    

        <!-- Driver Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver5.jpg') }}" class="card-img-top" alt="Driver 5">
                <div class="card-body">
                    <h5 class="card-title">Courier & Delivery Driver</h5>
                    <p class="card-text">Professional delivery drivers for packages and documents.</p>
                    <a href="{{ url('/booking/driver/5') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver6.jpg') }}" class="card-img-top" alt="Driver 6">
                <div class="card-body">
                    <h5 class="card-title">Corporate Driver</h5>
                    <p class="card-text">Professional drivers for office and corporate transportation.</p>
                    <a href="{{ url('/booking/driver/6') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver7.jpg') }}" class="card-img-top" alt="Driver 7">
                <div class="card-body">
                    <h5 class="card-title">VIP Driver</h5>
                    <p class="card-text">Experienced drivers for VIP and luxury transportation.</p>
                    <a href="{{ url('/booking/driver/7') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 8 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver8.jpg') }}" class="card-img-top" alt="Driver 8">
                <div class="card-body">
                    <h5 class="card-title">Part-Time Driver</h5>
                    <p class="card-text">Flexible driver services for part-time or hourly needs.</p>
                    <a href="{{ url('/booking/driver/8') }}" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>

        <!-- Driver Card 9 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/driver9.jpg') }}" class="card-img-top" alt="Driver 9">
                <div class="card-body">
                    <h5 class="card-title">Night Shift Driver</h5>
                    <p class="card-text">Safe and reliable drivers for late-night transportation.</p>
                    <a href="{{ url('/booking/driver/9') }}" class="btn btn-primary">Book Now</a>
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

   


        <!-- Cleaner Card 7 -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/cleaning7.jpg') }}" class="card-img-top" alt="Cleaner 7">
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
                <img src="{{ asset('img/cleaning8.jpg') }}" class="card-img-top" alt="Cleaner 8">
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
                <img src="{{ asset('img/cleaning9.jpg') }}" class="card-img-top" alt="Cleaner 9">
                <div class="card-body">
                    <h5 class="card-title">General Home Cleaning</h5>
                    <p class="card-text">Regular cleaning services to keep your home fresh.</p>
                    <a href="{{ url('/booking/cleaner/9') }}" class="btn btn-primary">Book Now</a>
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



    <!-- SERVICES End -->
@include('partials.footer')