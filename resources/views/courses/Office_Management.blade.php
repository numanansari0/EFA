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

    <style>
        .tabs ul li {
            list-style-type: none;
        }

        .tabs ul li a {
            font-size: 25px;
            color: #4e4e4e !important;
            font-weight: 500;
        }

        .tabs ul li a.active {
            color: #f69050 !important;
        }

        .tabs ul li a:hover {
            color: #f69050 !important;
        }

        #more {
            display: none;
        }

        button {
            border: none;
            color: #f69050;
        }
    </style>
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
                    <h1 class="display-3 text-white animated slideInDown">Course</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('courses') }}">Course</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Office Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Course Detail Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 wow fadeInUp">
                    <div class="container">
                        <div class="row g-5 justify-content-center">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                                <h2>Office Management</h2>
                                <p>Start at the beginning by learning the fundamentals of Microsoft Office — including Word, Excel, PowerPoint, Outlook, and OneNote. Build a strong foundation to create professional documents, manage data efficiently, design impactful presentations, and streamline communication. Mastering these essential tools will boost your productivity, enhance your digital skills, and support success in any modern workplace.</p>
                                <div class="d-flex">
                                    <small><i class="fa fa-star text-warning"></i>4.6</small>
                                    <small style="margin-left: 15px;"><i class="fa fa-user-graduate"></i> 5.8L+ Learners</small>
                                    <small style="margin-left: 15px;"><i class="fa fa-user"></i>Beginner</small>
                                    <small style="margin-left: 15px;"><i class="fa fa-clock me-2"></i> 2.0 Months</small>
                                </div>
                                <div class="image-div text-left mt-3">
                                    <img src="{{ asset('img/testimonial-2.jpg') }}" alt="" style="height: 40px; width: 40px; border-radius: 50%;">
                                    <span style="margin-left: 10px;"><b>Instructor Name</b> Muhammad Asad</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid wow fadeInUp mt-5 tabs">
                        <!-- Tab panes -->
                        <div class="tab-content mt-4">
                            <div class="tab-pane container active" id="Overview">
                                <h2>About this Course</h2>
                                <p>This beginner-friendly Microsoft Office course teaches you the essentials of Word, Excel, PowerPoint, Outlook, and OneNote. Learn step by step through practical exercises and real-world examples. By the end of the course, you'll be able to create polished documents, analyze data, deliver compelling presentations, manage emails efficiently, and stay organized — all with confidence using the Microsoft Office suite.</p>
                                <h2 class="mt-4">Skills you'll gain</h2>
                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2" style="font-size: 15px; font-weight: normal;">Word: Professional document formatting</span>
                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2" style="font-size: 15px; font-weight: normal;">Excel: Formulas, charts, and data analysis</span>
                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2" style="font-size: 15px; font-weight: normal;">PowerPoint: Clean, impactful presentations</span>
                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2" style="font-size: 15px; font-weight: normal;">Using of AI</span>
                                <span class="badge rounded-pill text-white bg-primary px-4 py-2 m-2" style="font-size: 15px; font-weight: normal;">Installing Window & any Software</span>
                            </div>

                            <div class="container" id="Curriculum">
                                <h2 class="mt-4">Syllabus</h2>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <!-- Introduction to Microsoft Office -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Introduction to Microsoft Office
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Overview of Microsoft Office Suite</li>
                                                    <li><i class="fa fa-video text-danger"></i> Understanding Office 365</li>
                                                    <li><i class="fa fa-video text-danger"></i> Interface and Navigation Basics</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Microsoft Word -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Microsoft Word
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Creating and Formatting Documents</li>
                                                    <li><i class="fa fa-video text-danger"></i> Using Templates and Styles</li>
                                                    <li><i class="fa fa-video text-danger"></i> Inserting Tables, Images, and Hyperlinks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Microsoft Excel -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                Microsoft Excel
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Spreadsheet Basics</li>
                                                    <li><i class="fa fa-video text-danger"></i> Formulas, Functions & Formatting</li>
                                                    <li><i class="fa fa-video text-danger"></i> Creating Charts & Pivot Tables</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Microsoft PowerPoint -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                                Microsoft PowerPoint
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Slide Design and Layout</li>
                                                    <li><i class="fa fa-video text-danger"></i> Adding Transitions and Animations</li>
                                                    <li><i class="fa fa-video text-danger"></i> Embedding Multimedia Elements</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Microsoft Outlook -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                                Microsoft Outlook
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Managing Emails & Contacts</li>
                                                    <li><i class="fa fa-video text-danger"></i> Calendar & Task Management</li>
                                                    <li><i class="fa fa-video text-danger"></i> Organizing with Folders & Rules</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Using AI in Office -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                                Using AI in Microsoft Office
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Introduction to Microsoft Copilot & Editor</li>
                                                    <li><i class="fa fa-video text-danger"></i> Smart Suggestions & AI Tools in Word/Excel</li>
                                                    <li><i class="fa fa-video text-danger"></i> Productivity Enhancements with AI</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Installing Windows & Software -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                                Installing Windows & Software
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Installing or Upgrading Windows</li>
                                                    <li><i class="fa fa-video text-danger"></i> Installing Microsoft Office Suite</li>
                                                    <li><i class="fa fa-video text-danger"></i> Troubleshooting Common Issues</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Final Project -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                                Final Project
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li><i class="fa fa-video text-danger"></i> Create a Professional Report (Word)</li>
                                                    <li><i class="fa fa-video text-danger"></i> Analyze Data (Excel)</li>
                                                    <li><i class="fa fa-video text-danger"></i> Design a Presentation (PowerPoint)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container" id="Instructor">
                                <h2 class="mt-4">About the Instructor</h2>
                                <div class="image-div text-left mt-4">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <img src="{{ asset('img/testimonial-2.jpg') }}" alt="" style="height: 150px; width: 150px; border-radius: 50%;">
                                        </div>
                                        <div class="col-lg-9 col-md-6 mt-2">
                                            <h5>Muhammad Asad</h5>
                                            <p>Developer</p>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p><i class="fa fa-star"></i>4.87 Instructor rating</p>
                                                </div>
                                                <div class="col-6">
                                                    <p><i class="fa fa-check"></i>1,533 reviews</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p><i class="fa fa-user"></i>20 Students</p>
                                                </div>
                                                <div class="col-6">
                                                    <p><i class="fa fa-video"></i>29 courses</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="des mt-4 mb-5">
                                        Curriculum Director at Codecademy and expert in workplace productivity tools. He has led the development of professional training programs including Microsoft Office for Business, Advanced Excel for Data-Driven Teams, and AI Integration in Office Workflows. With a strong emphasis on real-world business applications, his courses empower corporate professionals to master tools like Word, Excel, PowerPoint, and Outlook — streamlining communication, improving reporting efficiency, and enhancing presentation impact. The curriculum also includes essential IT skills like Windows setup and AI tools, helping teams work smarter and stay competitive in today's fast-paced digital environment.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 shadow wow fadeInUp" data-wow-delay="0.3s">
                    <div class="image text-center">
                        <img class="img-fluid mt-2" src="{{ asset('img/course-9.jpg') }}" alt="" height="200px" width="500px">
                    </div>

                    <h4 class="mt-2 p-2">Rs.<small><del>8K</del></small></h4>
                    <h4 class="mt-2 p-2">RS.<small>5K</small></h4>

                    <div class="buttons">
                        <a href="{{ route('apply') }}" class="text-decoration-none text-white btn p-3 w-100 mb-2">ENROLL NOW</a>
                    </div>
                    <div class="list mt-2">
                        <div class="list1 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-clock"></i> Duration</p>
                            <p>2.0 Months</p>
                        </div>
                        <div class="list2 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-book"></i> Lectures</p>
                            <p>40</p>
                        </div>
                        <div class="list3 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-bolt"></i> Enrolled</p>
                            <p>50 students</p>
                        </div>
                        <div class="list4 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-google-translate"></i> Language</p>
                            <p>English</p>
                        </div>
                        <div class="list5 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-list"></i> Skill Level</p>
                            <p>Beginner</p>
                        </div>
                        <div class="list6 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-list"></i> Deadline</p>
                            <p>Life Time</p>
                        </div>
                        <div class="list7 d-flex justify-content-between pt-2 border-bottom">
                            <p><i class="fa fa-certificate"></i> Certificate</p>
                            <p>Yes</p>
                        </div>
                        <div class="button pt-4 text-center mb-4">
                            <i class="fa fa-share"></i><a href=""> Share this Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Detail End -->

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