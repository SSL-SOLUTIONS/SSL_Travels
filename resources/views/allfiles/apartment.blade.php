<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5AIBDR6Wx5lGqgEf4lTjkCE5T/J6pCp1FO8D7hFiVCISWI3nFVOpA4SBDpOHbn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet"> <!-- Font Awesome for icons -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-EK+CH+W2C4bb0cSXerW9MJbwe5qN3+MqZsjdn2qDpCXL3p/cM+nydF4UE2QTcz7nN4P6UYB3PMjhS+yA+/4HNZA==" crossorigin="anonymous" />


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
.zoom-out-image {
        transition: transform 0.3s ease-in-out;
    }

    .zoom-out-image:hover {
        transform: scale(1.1);
    }

</style>

<body>
    @include('allfiles.nav')

    <img style="width: 100%;" src="{{asset('/images/house.jpg')}}" alt="">
   

    <div class="text-center mt-3 mb-2">
        <h4 style="display: inline-block;padding:8px; color:black; font-size:xx-large" >Apartments</h4>
        </div>
    
        <div class="container-fluid bg-light">
    <div class="row">
        @foreach(\App\Models\Apartment::all() as $index => $apartment)
            <div class="col-lg-3 col-md-6 col-12 mt-5">
                <div class="card animate__animated animate__fadeInUp" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px; overflow: hidden;">
                    <img class="card-img-top img-fluid zoom-out-image" src="{{ asset('admin/assets/images/apartments/' . $apartment->image) }}" alt="car Image">
                    <div class="card-body">
                        <h3 class="card-title">{{$apartment->rooms}}</h3>
                        <h5 class="card-title">Rs:{{$apartment->price}}/per day</h5>
                        <a href="{{ route('contact') }}" class="btn btn-outline-dark">Book Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('allfiles.homefooter')

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY1TEb6wH1X8jCkO4Hgj6AgFvoWgW8beUH1Uq6" crossorigin="anonymous"></script>

<!-- Waypoints script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-ZqGq8fNiEjG6iC3i6XGBBdA7Rzcj6EYq5L5LJdEGRK4wURB3MGBCVb/uygV8UUKKIEnls+KWgKc6WjJvvoG7Ow==" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        $('.card').waypoint(function() {
            $(this.element).addClass('animate__animated animate__fadeInUp');
        }, {
            offset: '75%' // Adjust this value based on when you want the animation to trigger
        });
    });
</script>

</body>

</html>
