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
        <a href="{{ route('maldivesdetails') }}">
            <img src="{{asset('images/11-post-tour.jpg')}}" class="img-fluid card-img-topp" alt="Card 1">
        </a>
        <div class="card-body">
            <h3 class="card-title" style="font-weight: 700; color:black;">Trip To Maldives</h3>
            <h3 class="card-title" style="color:black;">$1,200.00</h3>
            <ul style="color:black;">
                <li>Maldives Entry</li>
                <li>06 Nights’ Accommodation in Maafushi with daily breakfast</li>
                <li>Transfers SIC (Airport-Hotel-Airport)</li>
            </ul>
        </div>
    </div>
</div>

            <div class="col-lg-4 col-md-6 mb-4">
                
                    <div class="card card-hover">
                    <a href="{{ route('maldivesdetails2') }}">
                        <img src="{{asset('images/5-post-tour.png')}}" class=" img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip to Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$2,075.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>Return International Air Ticket</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails3') }}">
                        <img src="{{asset('images/4-post-tour.png')}}" class=" img-fluid card-img-topp" alt="Card 2">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$2,077.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>4* Hotel with Deluxe Sea View Room</li>
                                <li>Return International Air Ticket</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails4') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,944.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>
                                Return International Ticket (Lhr—Male—Lhr)
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails5') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Maldives Resort Trip (Adaaran Club Rannalhi)</h3>
                            <h3 class="card-title" style=" color:black;">$2,500.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>Resort (Adaaran Club Rannalhi )</li>
                                <li>Return International Ticket (Lhr— Mal—Lhr)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails6') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$2,123.00</h3>
                            <ul style=" color:black;">
                            <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Return International Ticket ( Lahore-Maldives-Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails7') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Maldives Resort Trip</h3>
                            <h3 class="card-title" style=" color:black;">$2,636.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>Resort (Adaaran Club Rannalhi)</li>
                                <li>Return International Ticket (Lhr — Maldives — Lhr)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails8') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$2,636.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entryx</li>
                                <li>03 Nights’ Accommodation in Resort</li>
                                <li>03 Nights’ Hotel Accommodation in Maafushi</li>
                                <li>Return Air Ticket</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails9') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,295.00</h3>
                            <ul style=" color:black;">
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Maldives Entry</li>
                                <li>Daily Breakfast</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails10') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,770.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>Return Air Ticket (Lahore-Maldives-Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails11') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Two In One (Maldives & Sri Lanka) Eco Pla</h3>
                            <h3 class="card-title" style=" color:black;">$1,545.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>Sri Lanka E visa</li>
                                <li>Bed & Breakfast Basis (Maldives)</li>
                                <li>Breakfast & Dinner included In Sri Lanka</li>
                                <li>International Return Ticket (Lhr–Male—Sri Lanka —Lhr)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails12') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Group Tour To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,545.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>4 Star Hotel ( Deluxe Sea View Room)</li>
                                <li>Return Air Ticket (Lahore-Maldives-Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails13') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Group Tour To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,325.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>04 Nights’ Accommodation in Maafushi</li>
                                <li>Deluxe Sea View Room with Breakfast</li>
                                <li>Return Air Ticket (Lahore-Maldives-Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails14') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Group Tour To Maldives & Sri Lanka</h3>
                            <h3 class="card-title" style=" color:black;">$1,635.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>Sri Lanka E visa</li>
                                <li>Bed & Breakfast Basis (Maldives)</li>
                                <li>Breakfast & Dinner included In Sri Lanka</li>
                                <li>International Return Ticket (Lhr–Male—Sri Lanka —Lhr)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails15') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Group Tour To Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,635.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>Return Air Ticket</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails16') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Group Tour to Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,545.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>Return Air Ticket (Lahore-Maldives-Lahore)</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails17') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Trip To Maldives and Sri Lanka</h3>
                            <h3 class="card-title" style=" color:black;">$1,770.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>Sri Lanka E visa</li>
                                <li>International Return Ticket</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails16') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">New Year In Maldives</h3>
                            <h3 class="card-title" style=" color:black;">$1,635.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>06 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-hover">
                <a href="{{ route('maldivesdetails17') }}">
                        <img src="{{asset('images/3-post-tour.png')}}" class="img-fluid card-img-topp" alt="Card 2">
                </a>
                        <div class="card-body">
                            <h3 class="card-title" style="font-weight: 700;  color:black; ">Maldives Group Tour</h3>
                            <h3 class="card-title" style=" color:black;">$1,370.00</h3>
                            <ul style=" color:black;">
                                <li>Maldives Entry</li>
                                <li>05 Nights’ Accommodation in Maafushi</li>
                                <li>Daily Breakfast</li>
                                <li>Sunset Fishing with BBQ dinner</li>
                                <li>Biyadhoo Reef/ Banana reef</li>
                                <li>Turtle Reef excursions</li>
                            </ul>
                        </div>
                    </div>
            </div> -->

        </div>
    </div>

    @include('allfiles.footer')
</body>

</html>
