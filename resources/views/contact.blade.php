<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Acer - Customer Support</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

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
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{url('')}}" class="navbar-brand p-0">

                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Acer_2011.svg/2560px-Acer_2011.svg.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{url('')}}" class="nav-item nav-link">Home</a>
                        <a href="{{url('business')}}" class="nav-item nav-link">Business</a>
                        <a href="{{url('event')}}" class="nav-item nav-link">Events</a>
                        <a href="{{url('sercen')}}" class="nav-item nav-link">Service Center</a>
                        </div>
                        <a href="{{url('contact')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Support</a>
                    </div>
                </div>
            </nav>
        <!--Navbar ENd-->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Customer Support</h1>
            </div>
        </div>
        <!-- Header End -->


        <!-- Contact Start -->
        <div class="container-fluid contact py-5" style="background-color: none; background: #025d0063;">
            <div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
                <div class="col-lg-7 col-xl-7 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                    <h2 class="display-5 text-dark mb-2 text-center">Customer Support</h2>
                    <p class="mb-4 text-dark text-center">If you face any problem and need some help, feel free to contact us by filling this form below.</p>
                    <form id="supportForm">
                        <div class="row g-3">
                            <!-- Name Field -->
                            <div class="col-lg-12 col-xl-6">
                                <label for="name" class="form-label text-dark">Your Name</label>
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border" id="name" placeholder="Your Name">
                                </div>
                            </div>
                            <!-- Email Field -->
                            <div class="col-lg-12 col-xl-6">
                                <label for="email" class="form-label text-dark">Your Email</label>
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent border" id="email" placeholder="Your Email">
                                </div>
                            </div>
                            <!-- Phone Field -->
                            <div class="col-lg-12 col-xl-6">
                                <label for="phone" class="form-label text-dark">Your Phone</label>
                                <div class="form-floating">
                                    <input type="tel" class="form-control bg-transparent border" id="phone" placeholder="Phone" pattern="[0-9]{10,15}" title="Phone number should be 10 to 15 digits" required>
                                </div>
                            </div>
                            <!-- Project Field -->
                            <div class="col-lg-12 col-xl-6">
                                <label for="project" class="form-label text-dark">Your Project</label>
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border" id="project" placeholder="Project">
                                </div>
                            </div>
                            <!-- Subject Field -->
                            <div class="col-12">
                                <label for="subject" class="form-label text-dark">Subject</label>
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent border" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <!-- Message Field -->
                            <div class="col-12">
                                <label for="message" class="form-label text-dark">Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent border" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact End -->



        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Acer_2011.svg/2560px-Acer_2011.svg.png" alt="Logo">
                            <p>Acer Inc. is a Taiwanese tech company known for laptops, desktops, and monitors, offering both budget and high-performance products.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white"> Pertemuan 1-7</h4>
                            <a href="{{url('linktree')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 1</a>
                            <a href="{{url('hello')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 2 Part 1</a>
                            <a href="{{url('style')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 2 Part 2</a>
                            <a href="{{url('style2')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 2 Part 3</a>
                            <a href="{{url('responsive1')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 3</a>
                            <a href="{{url('5026221199')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 5</a>
                            <a href="{{url('form')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 7 form</a>
                            <a href="{{url('template')}}"><i class="fas fa-angle-right me-2"></i> Pertemuan 7 form template</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Supports</h4>
                            <a href="https://www.acer.com/id-id/whats-acer-id"><i class="fas fa-angle-right me-2"></i> Acer ID</a>
                            <a href="https://www.acer.com/id-id/account/registerproduct"><i class="fas fa-angle-right me-2"></i> Products Catalog</a>
                            <a href="https://community.acer.com/"><i class="fas fa-angle-right me-2"></i> Acer Community</a>
                            <a href="https://www.acer.com/id-id/support/drivers-and-manuals"><i class="fas fa-angle-right me-2"></i> Driver and Manual</a>
                            <a href="https://community.acer.com/en/kb"><i class="fas fa-angle-right me-2"></i> Acer Answer</a>
                            <a href="contact.html"><i class="fas fa-angle-right me-2"></i> Contact Support</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">About Acer</h4>
                            <a href="contact.html"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                            <a href="https://www.acer.com/corporate/en/investor-relations"><i class="fas fa-angle-right me-2"></i> Contact Investor</a>
                            <a href="https://news.acer.com/"><i class="fas fa-angle-right me-2"></i> News</a>
                            <a href="https://www.acer.com/id-id/awards"><i class="fas fa-angle-right me-2"></i> Awards</a>
                            <a href="event.html"><i class="fas fa-angle-right me-2"></i> Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <!-- Form Submission Script -->
<!-- Form Submission Script -->
<script>
    document.getElementById('supportForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Display an alert message
        alert('Form submitted successfully!');

        // Reset the form fields to empty
        this.reset();
    });
</script>
    </body>
</html>
