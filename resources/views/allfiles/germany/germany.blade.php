<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SSL Travels & Tours</title>
    <style>
    </style>
</head>

<body class="about-bg">
    @include('allfiles.nav')
    <div style="margin-top: 100px; margin-bottom:10px;" class="container">
        <div class="row bg-light">
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('germanydetails') }}">
                        <img src="{{asset('images/2-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 1">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700; color:black;">Group Tour To Europe</h3>
                            <h3 class="card-title" style="color:black;">$2,700.00</h3>
                            <ul style="color:black;">
                                <li>Schengen Visa Support</li>
                                <li>Daily Breakfast</li>
                                <li>Return Air Ticket (Lahore—Barcelona & Paris—Lahore)</li>
                            </ul>
                        </div>
                    </div>
                
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('germanydetails')}}">
                        <img src="{{asset('images/5-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Europe Group Tour</h3>
                            <h3 class="card-title" style=" color:black;">$3,450.00</h3>
                            <ul style=" color:black;">
                                <li>Schengen Visa Support</li>
                                <li>Daily Breakfast</li>
                                <li>Return Air Ticket (Lahore—Barcelona & Paris—Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('germanydetails3') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Europe 4 In 1 Group Tour</h3>
                            <h3 class="card-title" style=" color:black;">$3,875.00</h3>
                            <ul style=" color:black;">
                                <li>Schengen Visa Support</li>
                                <li>Daily Breakfast</li>
                                <li>Return Air Ticket (Lahore—Barcelona & Paris—Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
           

        </div>
    </div>

    @include('allfiles.footer')
</body>

</html>
