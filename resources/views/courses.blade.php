<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="google-translate-customization" content="9f841e7780177523-3214ceb76f765f38-gc38c6fe6f9d06436-c">
    </meta>

    <title>EFA Learn & Earn Academy : Courses</title>
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

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <p class="m-0 fw-bold" style="font-size: 25px;">
                <img src="{{ asset('img/logo.png') }}" alt="" height="50px">EFA Learn & Earn-<span style="color: #fb873f;">Academy</span>
            </p>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
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

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Categories</h6>
                <h1 class="mb-5" style="color: #fb873f;">Popular Topics to Explore</h1>
            </div>
            <div class="row g-2 m-2">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/word.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">Microsoft Word</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/cat1.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">Microsoft Excel</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/powerpoint.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">Power Point</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/trading.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center"> Trading</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/cat3.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">Python</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/c.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">C</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/C++.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">C++</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/cat5.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">Web Design</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/E-Commarce.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">E-Commarce</a>
                        </h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="content shadow p-3 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="{{ asset('img/digital markiting.png') }}" class="img-fluid" alt="categories">
                        <h5 class="my-2">
                            <a href="#" class="text-center">Digital Markiting</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">Popular Courses</h6>
                <h1 class="mb-5" style="color: #fb873f;">Explore new and trending courses</h1>
            </div>
            <div class="row g-4 py-2">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-1.jpg') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.web_designing') }}" class="text-dark">Web Designing</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>4.55</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>5.8L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user me-2"></i>Intermediate</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>2 M</small>
                            <small class="py-1 px-1 fw-bold fs-6 text-center">Rs. 50K</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-12.png') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.C_language') }}" class="text-dark">C for Beginners</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>4.5</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>1.1L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user me-2"></i>Beginner</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>2 M</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">Rs. 5k</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-5.jpg') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.E_Commerce') }}" class="text-dark">E-Commrace</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-1"><i class="fa fa-star text-warning me-2"></i>4.54</small>
                            <small class="flex-fill text-center py-1 px-1"><i class="fa fa-user-graduate me-2"></i>1.3L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-1"><i class="fa fa-user me-2"></i>Intermediate</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>2 M</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">Rs. 30K</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-6.jpg') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#fb873f;"
                                class="px-2 py-1 fw-bold text-uppercase">FREE</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.ChatGPT') }}" class="text-dark">ChatGPT for Beginners</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>3.55</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>3.5L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user me-2"></i>Beginner</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>15 D</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">Rs. 0</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-7.jpg') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.Digital_Marketing') }}" class="text-dark">Digital Marketing</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>4.53</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>1L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user me-2"></i>Intermediate</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>2 M</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">Rs. 30K</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-9.jpg') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.Office_Management') }}" class="text-dark">Office Management</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>4.6</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>4.2L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user me-2"></i>Beginner</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>2 M</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">Rs. 5K</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item shadow">
                        <div class="position-relative overflow-hidden text-light image">
                            <img class="img-fluid" src="{{ asset('img/course-11.jpg') }}" alt="">
                            <div style="position:absolute;top: 15px;left: 16px; font-size:12px; border-radius:3px; background-color:#0ed44c;"
                                class="px-2 py-1 fw-bold text-uppercase">PAID</div>
                        </div>
                        <div class="p-2 pb-0">
                            <h5 class="mb-1"><a href="{{ route('courses.trading') }}" class="text-dark">Trading</a></h5>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-star text-warning me-2"></i>4.45</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user-graduate me-2"></i>5L+ Learners</small>
                            <small class="flex-fill text-center py-1 px-2"><i class="fa fa-user me-2"></i>Intermediate</small>
                        </div>
                        <div class="d-flex">
                            <small class="flex-fill text-left p-2 px-2"><i class="fa fa-clock me-2"></i>2 M</small>
                            <small class="py-1 px-2 fw-bold fs-6 text-center">Rs. 24K</small>
                            <small class="text-primary py-1 px-2 fw-bold fs-6" style="float:right;">
                                <a href="{{ route('apply') }}">Enroll Now</a><i class="fa fa-chevron-right me-2 fs-10"></i>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

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
                    <p><a class="text-light" href="{{ route('courses.Office_Management') }}">Office Management</a></p>
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