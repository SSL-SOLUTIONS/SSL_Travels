<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5AIBDR6Wx5lGqgEf4lTjkCE5T/J6pCp1FO8D7hFiVCISWI3nFVOpA4SBDpOHbn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">


    <title>SSL Travels & Tours</title>
</head>
<style>
    /* Your existing styles remain unchanged */

    body {
        padding-top: 56px;}
      
        .container {
    margin-top: 2rem;
    text-align: center;

            font-family: 'Nunito', sans-serif; 


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
    text-decoration: none; /* Remove default underline on anchor tag inside the button */
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

</style>

<body>
    @include('allfiles.nav')

    <img style="width: 100%;" src="https://www.hotelierindia.com/cloud/2022/05/16/1.jpg" alt="">
   

    <div class="text-center mt-3 mb-2">
        <h4 style="display: inline-block;padding:8px; color:black; font-size:xx-large" >International Tours</h4>
        </div>
        <div class="container-fluid bg-light">
        <div class="row">
            @foreach(\App\Models\International::all() as $international)
            <div class="col-lg-3 col-md-6 col-12 mt-5">
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
                        <a href="{{ route('intpackages', ['id' => $international->id]) }}" class="btn btn-outline-success">Packages</a>
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

       @include('allfiles.homefooter')
</body>

</html>