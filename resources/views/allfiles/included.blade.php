<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('website/designed/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <title>Designed</title>
    <style>
            body {
            font-family: 'Heebo', sans-serif;
        } 

        /* Define the keyframes for the animation */
       /* Define the keyframes for the animation */
       @keyframes zoomOut {
            from {
                transform: scale(0.5);
            }
            to {
                transform: scale(1.5);
            }
        }

        .packages {
            animation: zoomIn 3s ease-in-out forwards;
            display: inline-block;
        }
        .icon-col {
    transition: transform 0.3s ease-out;
}

.icon-col:hover {
    transform: translateY(-10px);
    z-index: 1;
}

/* Additional styling for better visibility */
.icon-row {
    display: flex;
    justify-content: space-between;
    margin: 20px;
}

.col-lg-3 {
    flex: 0 0 30%;
    max-width: 30%;
    padding: 0 15px;
    box-sizing: border-box;
}

h6 {
    margin-top: 10px;
}

/* Style for the travel item */
#travel:hover {
    transform: translateY(-10px);
    z-index: 1;
}




       
    </style>
</head>
<!-- design  section -->

<body class="design-body">
   
    <!-- design section end -->
    <div class="container-fluid text-center bg-light mt-4 mb-4 p-4">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 class="packages">
                    INCLUDED IN PACKAGES
                </h1>
                <br><br>
            </div>
        </div>
   
<div class="row icon-row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="icon-col mb-4" id="hotel">
            <i class="fa fa-building" style="font-size: 60px; color:blue;"></i>
            <h6>HOTEL Reservation</h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="icon-col mb-4" id="flight">
            <i class="fa fa-plane" style="font-size: 60px; color:blue;"></i>
            <h6>FLIGHT BOOKING</h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="icon-col mb-4" id="food">
            <i class="fa fa-coffee" style="font-size: 60px; color:blue;"></i>
            <h6>FREE FOOD </h6>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6" id="travel">
        <div class="icon-col mb-4">
            <i class="fa fa-bus" style="font-size: 60px; color:blue;"></i>
            <h6>TRAVEL & Tours</h6>
        </div>
    </div>
</div>



    </div>
</div>
    <br>
    <!-- icon section start -->



</body>

</html>