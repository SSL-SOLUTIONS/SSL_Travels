<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('website/footer/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/footer/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('website/footer/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('website/footer/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('website/footer/css/style.css')}}" rel="stylesheet">
    <style>
        @media (min-width: 768px) and (max-width: 991px) {
            .center-on-medium-tablet {
                margin-left: auto;
                margin-right: auto;
            }
        }
        .mb-2:hover .fa-map-marker-alt,
    .mb-2:hover .fa-phone-alt,
    .mb-2:hover .fa-envelope {
      color: blue;
    }
    </style>
</head>

<body>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn footery" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">SSL Travels & Tours</h4>
                    <a class="btn btn-link" href="{{route('international')}}">International Tours</a>
                    <a class="btn btn-link" href="{{route('local')}}">Local Tours</a>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                   
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Land Mark plaza, Jail Road, Lahore</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 301 111 4504</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ssltravel.com</p>
                    <div style="text-align:center;justify-content:center;" class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 center-on-medium-tablet">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('website/footer/img/package-1.jpg')}}" alt="">
                        </div>

                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('website/footer/img/package-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('website/footer/img/package-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('website/footer/img/package-2.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('website/footer/img/package-3.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('website/footer/img/package-1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{url('/')}}">SSL Travels & Tours</a>, All Right Reserved.
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('website/footer/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('website/footer/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('website/footer/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('website/footer/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('website/footer/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('website/footer/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('website/footer/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('website/footer/js/main.js')}}"></script>
</body>

</html>