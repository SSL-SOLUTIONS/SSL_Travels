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
</head>
<style>
    body {
        padding-top: 56px;

    }

    .carousel-inner {
        max-height: 400px;
    }

    .carousel-item {
        text-align: center;
    }

    .carousel-item img {
        height: 500px;
        width: 100%;
    }

    .carousel-caption {
        padding: 10px;
        color: white;
    }

    .container {
        margin-top: 2rem;
        text-align: center;
    }

    .image-container {
        padding: 1rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .link-a {
        text-decoration: none;
        color: black;
    }

    .img {
        height: 200px;
    }

    .description {
        font-size: medium;
        text-align: justify;
    }

    .button {
        background-color: white;
        color: blue;
        border: 1px solid blue;
        border-radius: 5px;
        cursor: pointer;
        padding: 0.5rem 1rem;
        text-decoration: none;
    }

    .button:hover {
        background-color: blue;
        color: white;
    }

    .button a {
        text-decoration: none;
    }

    .button a:hover {
        color: white;
    }

    .custom-button {
        display: inline-block;
        padding: 10px;
        margin: 10px;
        border: none;
        text-align: center;
        text-decoration: none;
        font-size: x-large;
        color: black;
        transition: all 0.3s ease;
    }

    .custom-button:hover {
        border: 2px solid blue;
        transform: scale(1.1);
    }
</style>

<body>
    @include('allfiles.nav')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/images/text.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">  
                <img src="{{asset('/images/textt.png')}}" class="d-block w-100" alt="...">
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
    <div class="text-center mt-3 mb-2">
        <h4 style="display: inline-block;padding:8px; color:black; font-size:xx-large">International Tours</h4>
    </div>
    <div class="container mt-2 text-center">
        <div class="row">
            @foreach(\App\Models\International::paginate(3) as $international)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="image-container bg">
                    <a class="link-a" href="{{ route('intpackages', ['id' => $international->id]) }}">
                        <img class="img-fluid img" src="{{ asset('admin/assets/images/internationals/' . $international->image) }}" alt="International Image"><br>
                        <p class="mt-2">
                            <h3>{{$international->title}}</h3>
                        </p>
                        <h5 class="description mt-3">
                            {{ Illuminate\Support\Str::limit($international->description, $limit = 100, $end = '...') }}
                        </h5>
                    </a>
                    <hr>
                    <div>
                        <button class="button mb-3 p-2 int-btn">
                            <a href="{{ route('intpackages', ['id' => $international->id]) }}">Packages</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <a class="custom-button" href="{{route('international')}}" style="font-family: sans-serif;">View All Tours</a>
    </div>





    <div class="text-center mt-3 mb-2">
        <h4 style="display: inline-block;padding:8px; color:black; font-size : xx-large">Local Tours</h4>
    </div>
    <div class="container mt-2 text-center">
        <div class="row">
            @foreach(\App\Models\Local::paginate(3) as $local)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="image-container bg">
                    <a class="link-a" href="{{ route('locpackages', ['id' => $local->id])}}">
                        <img class="img-fluid img" src="{{ asset('admin/assets/images/locals/' . $local->image) }}" alt="Local Image"><br>
                        <p class="mt-2">
                            <h3>{{$local->title}}</h3>
                        </p>
                        <h5 class="description mt-3">
                            {{ Illuminate\Support\Str::limit($local->description, $limit = 100, $end = '...') }}
                        </h5>
                    </a>
                    <hr>
                    <div>
                        <button class="button mb-3 p-2 int-btn ">
                            <a href="{{ route('locpackages', ['id' => $local->id])}}">Packages</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <a class="custom-button" href="{{route('local')}}">View All Tours</a>
    </div>
    <div>
        @include('allfiles.included')
    </div>

    @include('allfiles.contacts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY1TEb6wH1X8jCkO4Hgj6AgFvoWgW8beUH1Uq6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = new bootstrap.Carousel(document.getElementById('myCarousel'), {
                interval: 2000,
                wrap: true,
                keyboard: true
            });
        });
    </script>

@include('allfiles.homefooter')


</body>

</html>