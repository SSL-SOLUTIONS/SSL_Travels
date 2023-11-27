    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="{{('website/navbar/css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T6z4rJmTlqNc8YrQFVeJbp9BryvcrV3tbG5bCTRGU8K4NJSBxFk/z3xIYbIb77KK" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">




    </head>
    <style>
        .link-nav {
            position: relative;
            right: 25px;
        }
     
        body{
            font-family: 'Nunito', sans-serif; }
     

        .link-nav {
            padding: 50px;
        }
    </style>

    <body>
        <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <a href="{{url('/')}}" class="logo-nav">
                    <img src="{{('website/navbar/images/logo.png')}}" style="height: 60px;" alt="">
                </a>
            </div>
            <ul class="links">

                <li class="dropdown">
                    <a href="{{url('international')}}" class="links-nav">
                        International
                    </a>
                </li>
                <li>
                    <a href="{{route('local')}}" class="links-nav">
                        Local
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{route('destination')}}" class="links-nav">
                        Destination
                    </a>
                    <ul class="dropdown-content">

                    </ul>
                </li>


                <li>
                    <a href="{{route('transport')}}" class="links-nav">
                        Transport
                    </a>
                </li>
                <li>
                    <a href="{{route('activities')}}" class="links-nav">
                        Activities
                    </a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="links-nav">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="links-nav">
                        Contact
                    </a>
                </li>

            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
        <!-- <img class="hero-img" src="{{('website/navbar/images/hero.jpg')}}" alt=""> -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/slide.jpg')}}" class="img-fluid d-block w-100" alt="..." style="height: 50%;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/slider.jpg')}}" class="img-fluid d-block w-100" alt="..." style="height: 25%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div id="scroll-to-top"><i class="fas fa-angle-up"></i></div>
        <div class="whatsapp-icon">
            <a href="https://wa.me/+923011114504" target="_blank">
                <img src="{{asset('/images/whatsapp.PNG')}}" alt="WhatsApp">
            </a>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY1TEb6wH1X8jCkO4Hgj6AgFvoWgW8beUH1Uq6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script>
            $(document).ready(function() {
                // Show the scroll-to-top circle when the user scrolls down
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#scroll-to-top').fadeIn();
                    } else {
                        $('#scroll-to-top').fadeOut();
                    }
                });

                $('#scroll-to-top').click(function() {
                    $('html, body').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        </script>
        <script>
            window.addEventListener("scroll", function() {
                var whatsappIcon = document.querySelector(".whatsapp-icon");
                if (window.scrollY > 100) { // Adjust the scroll threshold as needed
                    whatsappIcon.style.display = "block";
                } else {
                    whatsappIcon.style.display = "none";
                }
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>

    </html>