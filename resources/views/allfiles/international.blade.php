<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5AIBDR6Wx5lGqgEf4lTjkCE5T/J6pCp1FO8D7hFiVCISWI3nFVOpA4SBDpOHbn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome for icons -->

    <title>Document</title>
</head>
<style>
    /* Your existing styles remain unchanged */

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
        height: 300px;
        width: 100%;
        object-fit: cover;
        /* Use 'cover' for a better responsive image */
    }

    .carousel-caption {
        padding: 10px;
        color: white;
    }

    .package-item {
        transition: transform 0.5s ease;
    }

    .package-item:hover {
        transform: scale(1.1);
    }

    .card-hover {
        position: relative;
        overflow: hidden;
    }

    .card-hover img {
        transition: transform 0.5s ease;
    }

    .card-hover:hover img {
        transform: scale(1.1);
    }

    .card-hover:hover {
        border: 2px solid skyblue;
    }

    .button-feat {
        border: 2px solid blue;
        color: blue;
        background-color: transparent;
        transition: background-color 0.3s ease, color 0.3s ease;
        padding: 8px;
        border-radius: 10px;
    }

    .button-feat:hover,
    .button-feat:active {
        background-color: blue;
        color: white;
        padding: 8px;
    }

    .image {
        width: 100%;
        height: 500px;
        transition: transform 0.3s ease;
    }

    .image:hover {
        transform: scale(1.1);
    }

    .int-btn {

        background-color: white;
        border: 1px solid blue;
    }

    .int-btn:hover {
        background-color: blue;
        text-decoration: white;
    }

    .int-btn a {
        color: blue;
    }

    .int-btn a:hover {
        color: whitesmoke;
    }

    .in-btn:hover a {
        color: whitesmoke;
    }
</style>

<body>
    @include('allfiles.nav')

    <img style="width: 100%;" src="https://i.pinimg.com/736x/65/a3/48/65a348aa04f47703f5ccc33f45934db9.jpg" alt="">
    <h2 class="text-center mt-3 mb-3">
        International Tours
    </h2>

    <div class="container mt-4 text-center">
        <div class="row">
            @foreach(\App\Models\International::all() as $international)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div style="margin-bottom: -90px;" class="image container bg">
                    <a style="text-decoration: none; color:black" class="link-a" href="{{ route('international', ['id' => $international->id]) }}">
                        <img style="height: 200px;" class="img-fluid img ml-5" src="{{ asset('admin/assets/images/internationals/' . $international->image) }}" alt=""><br>
                        <b>
                    {{$international->title}}
                    </b>
                        <h5  style="font-size: x-small;" class="mt-3">
                            {{ Illuminate\Support\Str::limit($international->description, $limit = 160, $end = '...') }}
                        </h5>
                    </a>
                    <hr>
                    <div>
                        <button  class="button mb-3 p-1 int-btn"><a style="text-decoration: none;" href="">Packages</a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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
            var myCarousel = new bootstrap.Carousel(document.getElementById('myCarousel'), {
                interval: 2000,
                wrap: true,
                keyboard: true
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const heading = document.querySelector("h1");

            // Function to apply the zoom-out effect
            function applyZoomOutEffect() {
                heading.style.transform = "scale(0.8)"; // You can adjust the scale value
                heading.style.fontWeight = "bold"; // Adjust the font weight
            }

            // Reload the page after a delay
            setTimeout(function() {
                applyZoomOutEffect();
            }, 500);
        });
    </script>
    @include('allfiles.footer')
</body>

</html>