@include('partials.header')


    <!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <!-- FIRST SLIDE -->
            <div class="carousel-item active">
                <img class="w-100" src="{{ ('img/home1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white mb-3">Find Trusted Services Near You</h2>
                        <p class="text-white mb-4">Hire professionals or register as a service provider</p>

                        <!-- Buttons -->
                        <!-- Hire Service Button -->
<button class="btn btn-primary btn-lg me-2"
        data-bs-toggle="modal"
        data-bs-target="#customerModal">
    Hire a Service
</button>

<!-- Register as Employee Button -->
<button class="btn btn-primary btn-lg"
        data-bs-toggle="modal"
        data-bs-target="#employeeModal">
    Register as Employee
</button>

                    </div>
                </div>
            </div>

            <!-- SECOND SLIDE (Same as original) -->
            <div class="carousel-item">
                <img class="w-100" src="home1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white mb-3">Find Trusted Services Near You</h2>
                        <p class="text-white mb-4">Hire professionals or register as a service provider</p>

                        <!-- Buttons -->
                        <button class="btn btn-primary btn-lg me-2 " onclick="openForm('serviceForm')">
                            Hire a Service
                        </button>

                        <button class="btn btn-primary btn-lg" onclick="openForm('employeeForm')">
                            Register as Employee
                        </button>
                    </div>
                </div>
            </div>

        
        <!-- Third SLIDE (Same as original) -->
            <div class="carousel-item">
                <img class="w-100" src="{{ ('img/home1.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white mb-3">Find Trusted Services Near You</h2>
                        <p class="text-white mb-4">Hire professionals or register as a service provider</p>

                        <!-- Buttons -->
                        <!-- Hire a Service Button -->
<button class="btn btn-primary btn-lg me-2" 
        data-bs-toggle="modal" 
        data-bs-target="#serviceModal">
    Hire a Service
</button>

<!-- Register as Employee Button -->
<button class="btn btn-primary btn-lg" 
        data-bs-toggle="modal" 
        data-bs-target="#employeeModal">
    Register as Employee
</button>


                    </div>
                </div>
            </div>

        </div>

        <!-- CONTROLS -->
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>

        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>

    </div>
</div>

<!-- CUSTOMER FORM Modal -->
<div class="modal fade" id="customerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Customer Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <!-- Full Name -->
          <div class="mb-3">
            <input type="text" id="fullName" class="form-control" placeholder="Enter your full name" required>
          </div>

          <!-- Location -->
          <div class="mb-3">
            <input type="text" id="location" class="form-control" placeholder="Enter your location" required>
          </div>

          <!-- Service Needed -->
          <div class="mb-3">
            <select id="serviceNeeded" class="form-select" required>
              <option selected disabled>Select a service</option>
              <option value="Home Cleaning">Home Cleaning</option>
              <option value="Plumbing">Plumbing</option>
              <option value="Electrical">Electrical</option>
              <option value="Car Mechanic">Car Mechanic</option>
            </select>
          </div>

          <!-- Phone Number -->
          <div class="mb-3">
            <input type="tel" id="phoneNumber" class="form-control" placeholder="Enter your phone number" required>
          </div>

          <!-- Emergency Service -->
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="emergencyService">
            <label class="form-check-label" for="emergencyService">
              Request Emergency Service
            </label>
          </div>

          <!-- Submit button right corner -->
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Employee Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="employeeModalLabel">Register as Employee</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        <form id="employeeForm" class="needs-validation" novalidate>
          
          <div class="mb-3">
            <input type="text" id="employeeName" class="form-control" placeholder="Enter your name" required>
          </div>

          <div class="mb-3">
            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
          </div>

          <div class="mb-3">
            <input type="tel" id="phoneNumber" class="form-control" placeholder="Enter your phone number" required>
          </div>

          <div class="mb-3">
            <input type="text" id="location" class="form-control" placeholder="Enter your location" required>
          </div>

          <div class="mb-3">
            <input type="text" id="employeeSkill" class="form-control" placeholder="Enter your skill/profession" required>
          </div>

          <div class="mb-3">
            <input type="text" id="idCard" class="form-control" placeholder="Enter your ID card number" required>
          </div>

          <div class="mb-3">
            <input type="number" id="employeeExperience" class="form-control" placeholder="Enter years of experience" required>
          </div>

          <!-- Submit button right-aligned -->
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>







   





   <!-- Services Start -->
<div class="container py-5">
    <div class="section-title text-center">
        <h1 class="display-5 mb-5 text-dark">Our Top Services</h1>
    </div>

    <!-- ======================== ROW 1 ======================== -->
    <div class="row g-4">

        <!-- Cleaner -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/cleaner') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/cleaner.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Home Cleaning</h5>
                        <p class="text-muted small">Professional home cleaning services.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Plumber -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/plumber') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/plumber.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Plumbing</h5>
                        <p class="text-muted small">Pipe repair & maintenance.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Electrician -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/electrition') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/electrition.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Electrician</h5>
                        <p class="text-muted small">Wiring, fixing & installations.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Car Mechanic -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/carmachanic') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/carmachanic.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Car Mechanic</h5>
                        <p class="text-muted small">AC repair & engine checkup.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <!-- ======================== ROW 2 ======================== -->
    <div class="row g-4 mt-3">

        <!-- Driver -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/driver') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/driver.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Driver</h5>
                        <p class="text-muted small">Pick & drop, hourly travel.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Babysitter -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/babysitter') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/baby.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Babysitter</h5>
                        <p class="text-muted small">Trained and caring babysitters.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Cooking -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/cooking') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/cook.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Cooking & Catering</h5>
                        <p class="text-muted small">Home-cooked meals & catering.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Painter -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/painter') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/painter.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Painter</h5>
                        <p class="text-muted small">Interior & exterior painting.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <!-- ======================== ROW 3 ======================== -->
    <div class="row g-4 mt-3">

        <!-- Beautician -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/beautition') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/beutition.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Beautician</h5>
                        <p class="text-muted small">Makeup, grooming & salon services.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Laundry -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/lundary') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/lundary.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Laundry</h5>
                        <p class="text-muted small">Wash, dry & ironing services.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Tailor -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/tailor') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/tailor.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Tailor</h5>
                        <p class="text-muted small">Stitching & alterations.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Home Shifting -->
        <div class="col-6 col-md-3">
            <a href="{{ url('/homeshiffting') }}" class="text-decoration-none">
                <div class="service-card">
                    <img src="{{ asset('img/shifting.jpg') }}">
                    <div class="card-body">
                        <h5 class="text-primary">Home Shifting</h5>
                        <p class="text-muted small">Safe packing & moving services.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>
<!-- SERVICES End -->

<!-- About start -->
<div class="container-fluid py-5 ">
    <div class="container pt-0 pt-lg-4">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid" src="{{ ('img/choose.jpg') }}" alt="" style="width: auto; height: 400px;">
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                <h1 class=" text-dark mb-3">Learn About Us</h1>
                <h2 class="mb-4 text-primary  font-weight-medium">We Provide Reliable Home Services In Your City</h2>
                
                <p class="mb-2">
                     WorkHub is a trusted service platform offering verified company workers for all types of home services. Customers can easily book services, track tasks, and make secure payments.
                                        Our system ensures transparent pricing, fast response, and high-quality service delivery. Each worker is verified by our company, and tasks are assigned based on skill and availability. WorkHub makes home services simple, safe, and reliable for everyone.

                </p>
                <div class="row">
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">Verified Company Workers</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">Fast & Easy Booking</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">Real-Time Service Updates</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">100% Customer Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
   
     


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h1 class="mb-4 text-dark">Why Choose Workhub?</h1>
                    <p>At <strong>WorkHub</strong> we connect you with trusted professionals for every home and office service. 
          From plumbing to cleaning and electrical repairs — our verified experts ensure quality, reliability, 
          and convenience, all at your fingertips.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">10</h1>
                            <h5 class="font-weight-bold text-dark">Verified Professionals</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">250</h1>
                            <h5 class="font-weight-bold text-dark">Happy Customers</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">1250</h1>
                            <h5 class="font-weight-bold text-dark">Available Services</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">9550</h1>
                            <h5 class="font-weight-bold text-dark">Customer Support</h5>
                        </div>
                    </div>
                </div>
                <!-- Right Side - Image Box -->
      <div class="col-lg-5">
        <div class="position-relative h-100">
          <img 
            src="{{ ('img/team.jpg') }}" style="height: 300px;" width="auto";
            alt="WorkHub Professionals" 
            class="img-fluid rounded shadow-lg h-100 w-100 object-fit-cover"
          >
          
        </div>
</div>
        </div>
    </div>
    <!-- Features End -->


    <!-- WORKING PROCESS - WorkHub -->
<!-- HOW IT WORKS - WorkHub -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h1 class="mb-5 text-dark">How It Works</h1>
    
    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow text-white">
          <div class="card-body py-5">
            <h3 class="card-title mb-3 text-dark">Request a Service</h3>
            <p class="card-text text-primary">Select the service you need and book online in minutes.</p>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow text-white" >
          <div class="card-body py-5">
            <h3 class="card-title mb-3 text-dark"> We Assign a Provider</h3>
            <p class="card-text text-primary">Our system finds the best available expert near you.</p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card h-100 border-0 shadow text-white">
          <div class="card-body py-5">
            <h3 class="card-title mb-3 text-dark"> Service at Your Doorstep</h3>
            <p class="card-text text-primary">Provider comes to your location and completes the job.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WORKING PROCESS END -->


    <!-- Pricing Plan Start -->
    
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
   <!-- CLIENT TESTIMONIALS - WORKHUB -->
<div class="container-fluid py-5 bg-light">
  <div class="container">
    <h1 class="display-4 text-center mb-5 text-dark">What Our Clients Say</h1>
    
    <div class="row g-4">
      <!-- Testimonial 1 -->
      <div class="col-12 col-md-3">
        <div class="bg-white text-center p-4 rounded shadow-sm">
          <img class="rounded-circle bg-white shadow mb-3" 
               src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=200&q=80" 
               style="width: 100px; height: 100px; padding: 12px;" alt="Client">
          <h5 class="font-weight-bold text-dark">Ayesha Khan</h5>
          <p class="text-muted font-italic">Homeowner</p>
          <p class="text-primary m-0">
            “WorkHub made it super easy to find a plumber the same day! 
            The worker was polite and professional. Highly recommended!”
          </p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="col-12 col-md-3">
        <div class="bg-white text-center p-4 rounded shadow-sm">
          <img class="rounded-circle bg-white shadow mb-3" 
               src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=200&q=80" 
               style="width: 100px; height: 100px; padding: 12px;" alt="Client">
          <h5 class="font-weight-bold text-dark">Usman Raza</h5>
          <p class="text-muted font-italic">Office Manager</p>
          <p class="text-primary m-0">
            “Booked an electrician through WorkHub — service was fast and reliable. 
            The platform is really easy to use!”
          </p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="col-12 col-md-3">
        <div class="bg-white text-center p-4 rounded shadow-sm">
          <img class="rounded-circle bg-white shadow mb-3" 
               src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=200&q=80" 
               style="width: 100px; height: 100px; padding: 12px;" alt="Client">
          <h5 class="font-weight-bold text-dark">Sara Malik</h5>
          <p class="text-muted font-italic">Apartment Resident</p>
          <p class="text-primary m-0">
            “Loved the experience! I booked a cleaner through WorkHub — 
            she did a great job and I’ll definitely use it again.”
          </p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="col-12 col-md-3">
        <div class="bg-white text-center p-4 rounded shadow-sm">
          <img class="rounded-circle bg-white shadow mb-3" 
               src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=200&q=80" 
               style="width: 100px; height: 100px; padding: 12px;" alt="Client">
          <h5 class="font-weight-bold text-dark">Ali Ahmed</h5>
          <p class="text-muted font-italic">Restaurant Owner</p>
          <p class="text-primary m-0">
            “Very professional workers! WorkHub helped me find reliable maintenance 
            staff for my restaurant. Great service!”
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END TESTIMONIALS -->

    <!-- Testimonial End -->


    <!-- Blog Start -->
<!-- <div class="container-fluid mt-5 pb-2">
  <div class="container">
    <h1 class="display-5 text-center mb-5 text-dark">Latest Tips & Insights</h1>

    <div class="row">
      
      <div class="col-lg-4 mb-4">
        <div class="shadow rounded overflow-hidden bg-white">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="Home Cleaning Tips">
            <span class="position-absolute top-0 start-0 bg-warning text-dark px-3 py-1 small fw-bold">Cleaning</span>
          </div>
          <div class="p-4">
            <h5 class="fw-bold text-dark">Top 5 Tips for Keeping Your Home Clean</h5>
            <p class="text-muted small mb-3">
              <i class="fa fa-calendar text-warning"></i> Nov 10, 2025 
              &nbsp; | &nbsp; 
              <i class="fa fa-user text-warning"></i> WorkHub Team
            </p>
            <p class="text-primary">
              Learn quick and easy cleaning tricks from our professionals to keep your home spotless and fresh all week long.
            </p>
            <a href="#" class="btn btn-sm btn-warning text-dark fw-bold">Read More</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 mb-4">
        <div class="shadow rounded overflow-hidden bg-white">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="Plumbing Maintenance">
            <span class="position-absolute top-0 start-0 bg-warning text-dark px-3 py-1 small fw-bold">Plumbing</span>
          </div>
          <div class="p-4">
            <h5 class="fw-bold text-dark">How to Avoid Common Plumbing Issues</h5>
            <p class="text-muted small mb-3">
              <i class="fa fa-calendar text-warning"></i> Oct 29, 2025 
              &nbsp; | &nbsp; 
              <i class="fa fa-user text-warning"></i> WorkHub Experts
            </p>
            <p class="text-primary">
              Save money and stress by learning simple preventive steps to keep your home’s plumbing in perfect shape.
            </p>
            <a href="#" class="btn btn-sm btn-warning text-dark fw-bold">Read More</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 mb-4">
        <div class="shadow rounded overflow-hidden bg-white">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="Home Service Safety">
            <span class="position-absolute top-0 start-0 bg-warning text-dark px-3 py-1 small fw-bold">Safety</span>
          </div>
          <div class="p-4">
            <h5 class="fw-bold text-dark">Safety First: How We Ensure Secure Services</h5>
            <p class="text-muted small mb-3">
              <i class="fa fa-calendar text-warning"></i> Oct 15, 2025 
              &nbsp; | &nbsp; 
              <i class="fa fa-user text-warning"></i> Admin
            </p>
            <p class="text-primary">
              At WorkHub, customer safety is our priority. Learn how our team verifies and monitors every professional.
            </p>
            <a href="#" class="btn btn-sm btn-warning text-dark fw-bold">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Blog End -->

   

@include('partials.footer')
   