<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Study Barn Travels - Educational Consultancy & Travel Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Study Barn Travels, educational consultancy, student travel services, study abroad, cultural exchange" name="keywords">
    <meta content="Study Barn Travels specializes in educational consultancy and travel planning, offering opportunities for students to study abroad while experiencing cultural exchange." name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-5 text-center text-lg-start mb-lg-0">
                <div class="d-flex">
                    <a href="mailto:info@studybarn.org" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>info@studybarn.org</a>
                    <a href="tel:+2348147647196" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>+234-814-764-7196</a>
                </div>
            </div>
            <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href="#"><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href="#"><i class="fab fa-youtube fw-normal text-secondary"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="#" class="text-muted me-2"> Help</a><small> / </small>
                    <a href="#" class="text-muted mx-2"> Support</a><small> / </small>
                    <a href="contact" class="text-muted ms-2"> Contact</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

     <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index" class="navbar-brand d-flex align-items-center p-0">
  <img src="img/logo22.png"
       alt="StudyBarn Logo"
       class="me-3"
       style="height:90px; max-height:90px; width:auto; display:block;">
</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index" class="nav-item nav-link ">Home</a>
                    <a href="about" class="nav-item nav-link ">About</a>
                    <a href="service" class="nav-item nav-link  ">Services</a>
                    <a href="training" class="nav-item nav-link ">Training</a>
                    <a href="testimonial" class="nav-item nav-link active">Testimonials</a>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="contact" class="btn btn-primary border-secondary rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0">Get Started</a>
            </div>
        </nav>
    </div>
    <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Testimonial</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index" class="text-white">Home</a></li>
                    
                    <li class="breadcrumb-item active text-secondary">Testimonial</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Testimonial Start -->
<div class="container-fluid testimonial overflow-hidden pb-5">
    <div class="container py-5">
        <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h5 class="sub-title text-primary px-3">Our Clients’ Reviews</h5>
            </div>
            <h1 class="display-5 mb-4">What Our Clients Say</h1>
            <p class="mb-0">We pride ourselves on making global opportunities accessible. Here’s what our happy clients have to say about their journey with Study Barn Travels.</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Study Barn Travels guided me step-by-step through my visa application. Today, I’m pursuing my dream studies abroad—thanks to their support!</p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="client image">
                    </div>
                    <div class="my-auto">
                        <h5>Jane Doe</h5>
                        <p class="mb-0">Student, Canada</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Their training services are excellent. My IELTS score improved dramatically after their coaching program!</p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="client image">
                    </div>
                    <div class="my-auto">
                        <h5>Michael O.</h5>
                        <p class="mb-0">IELTS Candidate</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-content p-4 mb-5">
                    <p class="fs-5 mb-0">Professional, reliable, and fast. Study Barn Travels made my travel process stress-free.</p>
                    <div class="d-flex justify-content-end">
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                        <i class="fas fa-star text-secondary"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                        <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="client image">
                    </div>
                    <div class="my-auto">
                        <h5>Aisha Bello</h5>
                        <p class="mb-0">Professional, UK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

        <!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Contact Info</h4>
                    <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 24 Allen Avenue, Ikeja, Nigeria</a>
                    <a href="mailto:info@studybarn.org"><i class="fas fa-envelope me-2"></i> info@studybarn.org</a>
                    <a href="tel:+2348147647196"><i class="fas fa-phone me-2"></i> +234-814-764-7196</a>
                    <div class="d-flex align-items-center mt-3">
                        <i class="fas fa-share fa-2x text-secondary me-2"></i>
                        <a class="btn mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Opening Hours</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Monday - Friday:</h6>
                        <p class="text-white mb-0">09:00 am to 07:00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Saturday:</h6>
                        <p class="text-white mb-0">10:00 am to 05:00 pm</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Sunday:</h6>
                        <p class="text-white mb-0">Closed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">Our Services</h4>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Educational Consultancy</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Visa & Immigration Support</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Travel Planning</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Study Abroad Guidance</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Career Counselling</a>
                    <a href="#"><i class="fas fa-angle-right me-2"></i> Language Test Training</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-secondary mb-4">Newsletter</h4>
                    <p class="text-white mb-3">Subscribe to our newsletter for updates on study and travel opportunities.</p>
                    <div class="position-relative mx-auto rounded-pill">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Study Barn Travels</a>, All right reserved.</span>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>