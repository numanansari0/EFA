<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EFA Learn & Earn Academy : Instructor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;"><img src="{{ asset('img/logo.png') }}" alt="" height="50px">EFA Learn & Earn-<span style="color: #fb873f;">Academy</span></p>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ route('courses') }}" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="{{ route('team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                <a href="#" class="nav-item nav-link">
                    <div id="google_translate_element"></div>
                </a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Become An Instructor</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Become An Instructor</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Instructor Page Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5 bg-white text-center px-3" style="color: #fb873f;">Apply As Instructor</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Welcome to EFA Learn & Earn Academy - Where Knowledge Meets Innovation</h5>
                    <p class="mb-4">Are you passionate about sharing your expertise and making a real impact on learners worldwide? If so, we invite you to become an instructor on our dynamic e-learning platform! Join a community of educators dedicated to fostering a love for learning and empowering individuals to achieve their goals.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/instructor-1.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4" style="color: #fb873f;">Why Choose EFA Learn & Earn Academy as Your Teaching Hub?</h1>
                    <div class="row gy-2 gx-4 mb-4">
                        <ul style="list-style: none;">
                            <li><b>Global Reach, Local Impact :</b> Reach a diverse audience from all corners of the globe while making a meaningful difference in individual lives.</li>
                            <li><b>Cutting-Edge Technology : </b>Leverage our state-of-the-art e-learning infrastructure, ensuring a seamless and engaging learning experience for both you and your students.</li>
                            <li><b>Flexible Teaching Opportunities : </b>Create and manage your courses on a schedule that suits your lifestyle, allowing you to balance your professional and personal commitments.</li>
                            <li><b>Competitive Compensation : </b> Benefit from a transparent and rewarding compensation structure that recognizes your expertise and commitment to education.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-2 text-center">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 style="color: #fb873f;">How It Works</h1>
                    <p class="mb-5">Your Journey to Becoming an Instructor</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <h5 class="mb-3">Application Process</h5>
                            <p>Submit your application and provide details about your expertise, teaching philosophy, and the courses you want to offer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <h5 class="mb-3">Content Creation</h5>
                            <p>Develop high-quality course content with the support of our instructional design team, ensuring your materials are engaging and effective.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <h5 class="mb-3">Go Live</h5>
                            <p>Once approved, your courses go live on our platform, and learners from around the world can enroll and benefit from your knowledge.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3 shadow">
                        <div class="p-4">
                            <h5 class="mb-3">Engage and Grow</h5>
                            <p>Interact with your students through discussion forums, live Q&A sessions, and feedback mechanisms, fostering a supportive learning community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4" style="color: #fb873f;">What We Look for in Our Instructors</h1>
                    <div class="row gy-2 gx-4 mb-4">
                        <ul style="list-style: none;">
                            <li><b>Passion for Teaching :</b>A genuine enthusiasm for sharing knowledge and facilitating the learning journey for others.</li>
                            <li><b>Expertise in Your Field : </b>Demonstrated expertise in your subject matter, backed by relevant qualifications and experience.</li>
                            <li><b>Communication Skills : </b>Clear and effective communication to convey complex concepts and engage learners of various backgrounds.</li>
                            <li><b>Innovation : </b> Willingness to embrace innovative teaching methods and technologies to enhance the learning experience.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/instructor-2.jpg') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('img/ready.jpg') }}" alt="">
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 style="color: #fb873f;">Ready to Join Us?</h1>
                    <p class="mb-4">Here's How to Get Started</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <ul style="list-style: none;">
                            <li><i class="fa fa-check"></i> Familiarize yourself with Secret Coder and the diverse range of courses we offer.</li>
                            <li><i class="fa fa-check"></i> Craft a compelling application that showcases your passion, expertise, and proposed course offerings.</li>
                        </ul>
                    </div>
                    <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply as Instructor</h5>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('instructor.apply') }}" class="shadow p-4">
                        @csrf
                        <h5 class="mb-4">Join EFA Learn & Earn Academy's Global Community of Expert Instructors</h5>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                    <label>First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                    <label>Last Name</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                    <label>Email</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number" required>
                                    <label>Phone Number</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label mt-2">What is the highest degree?</label>
                                <select name="degree" class="form-control" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="High School">High School</option>
                                    <option value="Undergraduate">Undergraduate</option>
                                    <option value="Graduate">Graduate</option>
                                    <option value="Post-Graduate">Post-Graduate</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label mt-2">What subject would you like to teach?</label>
                                <select name="subject" class="form-control" required>
                                    <option value="" disabled selected>Choose...</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Business">Business</option>
                                    <option value="Education">Education</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-floating mt-2">
                                    <textarea class="form-control" name="address" placeholder="Address" style="height: 150px" required></textarea>
                                    <label>Address</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" name="agree" required>
                                    <label class="form-check-label">
                                        I agree to the terms and confirm the truthfulness of my submission.
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit Application</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn text-white">Apply</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <h5 class="mb-4">Join Us in Transforming Lives Through Education!</h5>
                    <p>At EFA Learn & Earn Academy, we believe that education has the power to transform lives. Join us in creating a world where knowledge knows no bounds, and together, let's inspire, innovate, and educate!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Instructor Page End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <p><a class="text-light" href="{{ route('about') }}">About Us</a></p>
                    <p><a class="text-light" href="{{ route('contact') }}">Contact Us</a></p>
                    <p><a class="text-light" href="">Privacy Policy</a></p>
                    <p><a class="text-light" href="">Terms & Condition</a></p>
                    <p><a class="text-light" href="">FAQs & Help</a></p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-2"></i>Gulshan Ibrahim Town Mor-Khunda Pakistan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 03034297929</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>efa.learnandearnacademy11@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Our Courses</h4>
                    <p><a class="text-light" href="{{ route('courses.web_designing') }}">Web Designing</a></p>
                    <p><a class="text-light" href="{{ route('courses.C_language') }}">C for Beginners</a></p>
                    <p><a class="text-light" href="{{ route('courses.E_Commerce') }}">E-Commrace</a></p>
                    <p><a class="text-light" href="{{ route('courses.ChatGPT') }}">ChatGPT for Beginners</a></p>
                    <p><a class="text-light" href="{{ route('courses.Digital_Marketing') }}">Digital Marketing</a></p>
                    <p><a class="text-light" href="{{ route('courses.trading') }}">Trading</a></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('index') }}">Secret Coder</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>