<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europe Group Tour</title>
    <style>
        .button {
            background-color: skyblue;
            padding: 10px;
            border: 1px solid blue;
            color: black;
            text-align: center;
            text-decoration: none; /* Corrected: It should be 'none' instead of 'solid' */
            display: inline-block;
            font-size: larger;
            cursor: pointer;
            width: 20%;
        }

        .button:hover,
        .button:active {
            background-color: white;
            color: lightblue;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            margin-top: 100px;
            margin-bottom: 10px;
        }

        .row-bg-light {
            background-color: #ffffff;
        }

        .details-container {
            width: 50%;
            margin: auto;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
        }

        .toggle-link {
            display: block;
            background-color: whitesmoke;
            color: #000;
            text-align: center;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .toggle-link:hover {
            background-color: #2980b9;
            color: #fff;
        }

        .content {
            display: none;
        }
    </style>
</head>

<body class="about-bg">
    @include('allfiles.nav')
    <div class="container">
        <div class="row row-bg-light">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{asset('images/10-post-tour.jpg')}}" alt="#" style="height:350px;">
            </div>
            <div class="col-lg-6" style="margin-bottom: 20px; position:relative; left:20px;">
                <h3 class="card-title" style="font-weight: 700;">New Year Group Tour to Royal Caribbean Cruise</h3><br>
                <h3 class="card-title" style="font-weight: 700;">$2,700.00</h3><br>
                <ul>
                
                               <li>Singapore E-Visa</li>
                               <li>4 Nights stay in Royal Caribbean Cruise</li>
                               <li>1 Night Hotel accommodation in Singapore with BB</li>
                               <li>Return International Ticket (Lhr - Singapore - Lhr)</li>

                </ul>
                <button class="button mb-3 p-1"><a href="#">Book Now</a></button>
                <p style="color: black; font-weight:600">Categories: <span style="color: blue; font-weight:600;">Germany, Italy, Spain</span></p>
            </div>
        </div>

        <div class="details-container">
            <h1>Package Details</h1>

            <a href="#" class="toggle-link" onclick="toggleContent('description')">Description</a>
            <div id="description" class="content">
                <p>
                    For Queries & Details Call:
                    <br>+92 301 111 4504
                    <br> Schengen Visa Support
                    <br> 04 Nights’ Accommodation in Spain (Barcelona)
                    <br> 02 Nights’ Accommodation in Switzerland (Zurich)
                    <br> 03 Nights’ Accommodation in France (Paris)
                    <br> Daily Breakfast
                    <br> Barcelona Hop-On Hop Tour
                    <br> Big Bus Paris Hop-On Hop-Off Tour, Paris
                    <br> Zurich 2 hours sightseeing bus tour
                    <br> Private Transfer ( Barcelona Airport to Barcelona Hotel)
                    <br> Private Transfer (Barcelona Hotel to Barcelona Airport )
                    <br> Domestic Flight (Barcelona to Zurich )
                    <br> Private Transfer (Zurich Airport to Zurich hotel )
                    <br> Private Transfer (Zurich Hotel to Zurich Train station )
                    <br> Train Pass (Zurich to Paris )
                    <br> Private Transfer (Paris train station to Paris Hotel)
                    <br> Private Transfer (Paris Hotel to Paris Airport )
                    <br> Return Air Ticket (Lahore—Barcelona & Paris—Lahore)
                    <br> Booking Date: First Come First Served
                </p>
            </div>

            <a href="#" class="toggle-link" onclick="toggleContent('additional-info')">Additional Information</a>
            <div id="additional-info" class="content">
                <ul>
                    <li>Package Type Leisure</li>
                    <li>Tour Type Group</li>
                    <li>Accommodation Type Double, Twin</li>
                </ul>
            </div>
        </div>
    </div>

    @include('allfiles.footer')

    <script>
        function toggleContent(id) {
            var content = document.getElementById(id);
            content.style.display = (content.style.display === 'block') ? 'none' : 'block';
        }
    </script>
</body>

</html>
