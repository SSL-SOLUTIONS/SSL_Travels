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
        <a href="{{ route('malaysiadetails') }}">
            <img src="{{asset('images/8-post-tour.jpg')}}" class="img-fluid card-img-topp" alt="Card 1">
        </a>
        <div class="card-body">
            <h3 class="card-title" style="font-weight: 700; color:black;">Singapore Royal Caribbean Cruise Tour</h3>
            <h3 class="card-title" style="color:black;">$2,411.00
</h3>
            <ul style="color:black;">
                <li>Singapore E-Visa</li>
                <li>5* Royal Caribbean Cruise</li>
                <li>Return International Ticket (Lhr - Singapore - Lhr)</li>
            </ul>
        </div>
    </div>
</div>

            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('malaysiadetails2') }}">
                        <img src="{{asset('images/9-post-tour.jpg')}}" class=" img-fluid card-img-topp" alt="Card 2">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">New Year Royal Caribbean Cruise in Singapore</h3>
                            <h3 class="card-title" style=" color:black;">$2,700.00</h3>
                            <ul style=" color:black;">
                                <li>Schengen Visa Support</li>
                                <li>Daily Breakfast</li>
                                <li>Return International Ticket (Lhr - Singapore - Lhr)<li>
                                    <li>1 Night Hotel accommodation in Singapore with BB</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('malaysiadetails3') }}">
                        <img src="{{asset('images/10-post-tour.jpg')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">New Year Group Tour to Royal Caribbean Cruise</h3>
                            <h3 class="card-title" style=" color:black;">$2,700.00</h3>
                            <ul style=" color:black;">
                               <li>Singapore E-Visa</li>
                               <li>4 Nights stay in Royal Caribbean Cruise</li>
                               <li>1 Night Hotel accommodation in Singapore with BB</li>
                               <li>Return International Ticket (Lhr - Singapore - Lhr)</li>

                            </ul>
                        </div>
                    </div>
            </div>

        </div>
    </div>

    @include('allfiles.footer')
</body>

</html>
