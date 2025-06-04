<!DOCTYPE html>
<html>
<head>
    <title>Sylnovia CRUD</title>

    <!-- ✅ Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.jpg') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Navbar and Footer background and text color */
        nav.navbar,
        footer {
            background-color: #1e3a8a; /* dark blue */
        }

        nav.navbar .navbar-brand,
        nav.navbar .nav-link,
        footer,
        footer .card,
        footer .text-center,
        footer address,
        footer a.nav-link {
            color: #f8fafc !important; /* off-white text */
        }

        nav.navbar .navbar-brand:hover,
        nav.navbar .nav-link:hover,
        footer a.nav-link:hover {
            color: #60a5fa !important; /* lighter blue on hover */
        }

        /* Body background */
        body {
            background-color: #f3f4f6; /* light gray */
        }

        /* Footer card background transparent to show footer bg */
        footer .card {
            background-color: transparent;
            border: none;
        }

        /* Make footer links look nice */
        footer a.nav-link {
            padding-left: 0;
        }
    </style>
</head>
<body>

<!-- Navbar with Logo -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('projects.index') }}">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" width="40" height="40" class="me-2">
            <span class="fw-bold">Sylnovia</span>
        </a>
    </div>
</nav>

<!-- Page Content -->
<div class="container mt-5">
    @yield('content')
</div>

<!-- Footer -->
<footer class="py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h4 class="text-center">About Us</h4>
                    <hr style="border-color: #f8fafc;"/>
                    <p>This is Adri's Project Portfolio where you can find all kinds of projects.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h4 class="text-center">Our services</h4>
                    <hr style="border-color: #f8fafc;"/>
                    <ul class="navbar-nav">
                        <li><a href="" class="nav-link"> Strategic IT Consulting</a></li>
                        <li><a href="" class="nav-link"> Custom Software Development</a></li>
                        <li><a href="" class="nav-link"> DevOps and Site Reliability Engineering</a></li>
                        <li><a href="" class="nav-link"> QA Automation</a></li>
                        <li><a href="" class="nav-link"> UI/UX Design</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-body h-100">
                    <h4 class="text-center">Contact with us</h4>
                    <hr style="border-color: #f8fafc;"/>
                    <address>
                        <b> Office Location: </b> Technohaven Tower (3rd Floor), Plot-3, Road 2, Sadek Hossain Khoka Rd, Dhaka 1000. <br>
                        <b> Phone Number: </b> 01764111111 <br>
                        <b> Email Address: </b> info@sylnovia, contact@example.com <br>
                    </address>
                    <p class="text-center" style="color: #a52834">Subscribe</p>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" required placeholder="Email Address"/>
                            <input type="submit" class="btn btn-outline-success" value="Subscribe Now"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <hr style="border-color: #f8fafc;"/>
                <p class="text-center mb-0">copyright@2025 All rights reserved., ADRI SAHA WITH SYLNOVIA</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
