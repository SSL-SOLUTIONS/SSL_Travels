<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SSL Travels & Tours</title>
    <!-- <style>
        .card-link {
            display: block;
            height: 100%;
            color: inherit; /* Preserve text color */
            text-decoration: none; /* Remove underline */
        }
    </style> -->
</head>

<body class="about-bg">
    @include('allfiles.nav')
    <div style="margin-top: 100px; margin-bottom:10px;" class="container">
        <div class="row bg-light">
        <div class="col-lg-4 col-md-6 mb-4">
    <div class="card card-hover">
        <a href="{{ route('saudiarabiadetails') }}">
            <img src="{{asset('images/6-post-tour.jpg')}}" class="img-fluid card-img-topp" alt="Card 1">
        </a>
        <div class="card-body">
            <h3 class="card-title" style="font-weight: 700; color:black;">Umrah Group Tour</h3>
            <h3 class="card-title" style="color:black;">$1,960.00</h3>
            <ul style="color:black;">
                <li> Visa </li>
                <li>Daily Breakfast</li>
                <li>Return International Ticket from Lahore</li>
            </ul>
        </div>
    </div>
</div>

            <div class="col-lg-4 col-md-6 mb-4">
                
                    <div class="card card-hover">
                    <a href="{{ route('saudiarabiadetails2') }}">
                        <img src="{{asset('images/5-post-tour.png')}}" class=" img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Group Tour of 4 In 1 Countries</h3>
                            <h3 class="card-title" style=" color:black;">$3,450.00</h3>
                            <ul style=" color:black;">
                                <li>Thailand Visa</li>
                                <li>Sri Lanka Visa</li>
                                <li>Vietnam E-Approval</li>
                                <li>Singapore E Visa</li>
                                <li>Return Air Ticket   </li>
                            </ul>
                        </div>
                    </div>
            </div>
           
         

        </div>
    </div>

    @include('allfiles.footer')
</body>

</html>
