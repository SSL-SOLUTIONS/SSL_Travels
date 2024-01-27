<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5AIBDR6Wx5lGqgEf4lTjkCE5T/J6pCp1FO8D7hFiVCISWI3nFVOpA4SBDpOHbn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

    <title>SSL Travels & Tours</title>
    <style>
    .zoom-out-image {
        transition: transform 0.3s ease-in-out;
    }

    .zoom-out-image:hover {
        transform: scale(1.1);
    }
    
</style>

</head>

<body class="bg-light">
    @include('allfiles.nav')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active position-relative">
    <img src="{{asset('/images/slide.jpg')}}" class="d-block w-100 h-100 img-fluid" style="object-fit: cover;" alt="Responsive Image">

        <!-- Button inside the first image -->
        <div class="carousel-button-container position-absolute top-50 start-50 translate-middle">
            <a href="{{ route('contact') }}" class="btn btn-outline-primary" style="padding: 10px; width:auto;">Book Now</a>
        </div>
    </div>

    <div class="carousel-item  position-relative">
    <img src="{{asset('/images/slider.jpg')}}" class="d-block w-100 h-100 img-fluid" style="object-fit: cover;" alt="Responsive Image">

        <!-- Button inside the second image -->
        <div class="carousel-button-container position-absolute top-50 start-50 translate-middle">
            <a href="{{ route('contact') }}" class="btn btn-outline-primary" style="padding: 10px; width:auto;">Book Now</a>
        </div>
    </div>
</div>



        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span style="color: blue;" class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span style="color: blue;" class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="text-center mt-5">
        <h4 class="text-marquee" style="font-size: xx-large;">International Tours</h4>
    </div>

<div class="container-fluid bg-light">
    <div class="row">
        @foreach(\App\Models\International::paginate(4) as $international)
            <div class="col-lg-3 col-md-6 col-12 mt-5">
                <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">
                    <img class="card-img-top img-fluid zoom-out-image" src="{{ asset('admin/assets/images/internationals/' . $international->image) }}" alt="International Image">
                    <div class="card-body">
                        <h3 class="card-title">{{$international->title}}</h3>
                        <p class="card-text">
                            {{ Illuminate\Support\Str::limit($international->description, $limit = 90, $end = '...') }}
                        </p>
                        <a href="{{ route('intpackages', ['id' => $international->id]) }}" class="btn btn-outline-success">Packages</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <div class="text-center">
        <a class="btn btn-outline-dark mt-3" href="{{route('international')}}" style="font-size: x-large;">View All Tours</a>
    </div>

    <div class="text-center mt-3">
        <h4 class="text-marquee" style="font-size: xx-large;">Local Tours</h4>
    </div>

 <div class="container-fluid bg-light">
    <div class="row">
        @foreach(\App\Models\Local::paginate(4) as $local)
            <div class="col-lg-3 col-md-6 col-12 mt-5">
                <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">
                    <img class="card-img-top img-fluid zoom-out-image" src="{{ asset('admin/assets/images/locals/' . $local->image) }}" alt="Local Image">
                    <div class="card-body">
                        <h3 class="card-title">{{$local->title}}</h3>
                        <p class="card-text">
                            {{ Illuminate\Support\Str::limit($local->description, $limit = 90, $end = '...') }}
                        </p>
                        <a href="{{ route('locpackages', ['id' => $local->id]) }}" class="btn btn-outline-success">Packages</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


    <div class="text-center">
        <a class="btn btn-outline-dark mt-3" href="{{route('local')}}" style="font-size: x-large;">View All Tours</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY1TEb6wH1X8jCkO4Hgj6AgFvoWgW8beUH1Uq6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleControls'), {
                interval: 3000,
                wrap: true,
                keyboard: true
            });
        });
    </script>
    @include('allfiles.included')
    @include('allfiles.contact')
</body>

</html>
