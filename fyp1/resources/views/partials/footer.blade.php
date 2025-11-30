
     <!-- Footer Start -->
<!-- ========================================= -->
<!--                 FOOTER                     -->
<!-- ========================================= -->

<footer class="mt-5">
    <div class="container-fluid bg-primary text-white pt-5 px-xl-5 px-lg-4 px-md-4">
        <div class="row gy-5">

            <!-- Brand & About -->
            <div class="col-lg-3 col-md-6">
                <h1 class="fw-bold mb-3">
                    <span class="text-white">Work</span><span class="text-secondary">Hub</span>
                </h1>
                <p class="small opacity-75">
                    WorkHub connects you with skilled and verified professionals for all your home service needs —
                    reliable, fast, and always affordable.
                </p>

                <div class="d-flex mt-4">
                    <a class="btn btn-outline-light rounded-circle px-0 me-2"
                       style="width: 40px; height: 40px;" href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="btn btn-outline-light rounded-circle px-0 me-2"
                       style="width: 40px; height: 40px;" href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light rounded-circle px-0 me-2"
                       style="width: 40px; height: 40px;" href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="btn btn-outline-light rounded-circle px-0"
                       style="width: 40px; height: 40px;" href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 fw-semibold">Get In Touch</h4>
                <p class="small opacity-75">Have questions or need support? We’re available anytime.</p>

                <p class="small mb-1"><i class="fa fa-map-marker-alt me-2"></i> Lahore, Pakistan</p>
                <p class="small mb-1"><i class="fa fa-phone-alt me-2"></i> +92 300 1234567</p>
                <p class="small"><i class="fa fa-envelope me-2"></i> support@workhub.com</p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 fw-semibold">Quick Links</h4>

                <div class="d-flex flex-column">
                    <a class="text-white-50 mb-2" href="{{ url('/home') }}">
                        <i class="fa fa-angle-right me-2"></i>Home
                    </a>
                    <a class="text-white-50 mb-2" href="{{ url('/about') }}">
                        <i class="fa fa-angle-right me-2"></i>About Us
                    </a>
                    <a class="text-white-50 mb-2" href="{{ url('/services') }}">
                        <i class="fa fa-angle-right me-2"></i>Services
                    </a>
                    <a class="text-white-50 mb-2" href="{{ url('/team') }}">
                        <i class="fa fa-angle-right me-2"></i>Our Team
                    </a>
                    <a class="text-white-50" href="{{ url('/contact') }}">
                        <i class="fa fa-angle-right me-2"></i>Contact Us
                    </a>
                </div>
            </div>

            <!-- Top Services -->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-4 fw-semibold">Top Services</h4>

                <ul class="list-unstyled small">
                    <li class="mb-2"><strong>Home Cleaning</strong> — Fast & professional cleaning.</li>
                    <li class="mb-2"><strong>Plumbing</strong> — Expert plumbing repairs.</li>
                    <li class="mb-2"><strong>Car Mechanic</strong> — Reliable car AC & engine service.</li>
                    <li class="mb-2"><strong>Babysitting</strong> — Trusted and trained babysitters.</li>
                </ul>
            </div>

        </div>

        <!-- Divider Line -->
        <hr class="border-light opacity-25 mt-4">
    </div>

    <!-- Copyright -->
<div class="container-fluid bg-light py-3 border-top">
    <p class="text-center m-0 text-muted small">
        &copy; 2025 <strong>WorkHub</strong>. All rights reserved.
        <span class="d-block">Website designed with care & professionalism.</span>
    </p>
</div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg back-to-top shadow">
        <i class="fa fa-angle-up"></i>
    </a>
</footer>
    <!-- Footer End -->
    <!-- javascript-link -->
 <script src="{{ asset('js/home.js') }}"></script>


</body>

</html>