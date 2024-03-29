<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Package Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 100px;
        }

        .card {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header,
        .card-footer {
            background-color: #3498db;
            color: #fff;
            text-align: center;
        }

        .card-body {
            padding: 20px;
        }

        #toggleDescription,
        #toggleAdditionalInfo {
            color: black !important;
            text-decoration: none;
            margin-right: 15px;
        }
        button {
    border: none;
    outline: none;
}
    </style>
</head>

<body>

    @include('allfiles.nav')

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('admin/assets/images/localpkg/' . $localpackageDetails->image) }}" alt="Package Image" class="img-thumbnail">
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3 style="font-weight:bold" class="page-title">{{ $localpackageDetails->title }}</h3>
                        <div class="d-flex">
                            <h4 style="font-weight:bold" class="page-title">Price:</h4>
                            <h5 class="mt-1" style="font-weight:bold">{{ $localpackageDetails->price }}</h5>
                        </div>
                        <h4 style="font-weight:bold">Details:</h4>
                        <h6>{{ $localpackageDetails->description }}.</h6>
                        <br>
                        <button>
                    <a href="{{ route('contact') }}" class="btn btn-outline-success">Book Now</a>
                    </button>
                    </div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <!-- Buttons for toggling description and additional information in the same card header -->
                <div class="card-header">
                    <button class="btn btn-link int-btn" id="toggleDescription">Description</button>
                    <button class="btn btn-link int-btn" id="toggleAdditionalInfo">Additional Information</button>
                </div>

                <!-- Content for Description -->
                <div class="card-body col-lg-6" id="descriptionContent">
                    <h5>Description</h5>
                    <p>+92 301 111 4504</p>
                   <p>Exploring the Northern Areas </p>
                   <p>of Pakistan offers a mesmerizing journey through a landscape</p>
                    <p>of breathtaking beauty, rugged terrains, and rich cultural heritage. Nestled</p>
                    <p>amidst the towering peaks of the Himalayas,</p>
                    <p>Karakoram, and Hindu Kush mountain</p>
                    <p>The Northern Areas of Pakistan encompass several awe-inspiring</p>
                   <p>Murree, Skardu, Gilgit, Naltar Valley, and Fairy Meadows.</p>
                   <p>Murree, with its iconic </p>
                   <p>vistas of snow-capped peaks, crystal-clear lakes</p>
                   <p>2 Bottle Water per person per day</p>
                   <p>All transfers according to the program including airport transfers</p>
                    <p>Return International Ticket (Lahore-Baku Return)</p>
                    <p>Booking Date: First Come First Served</p>

                    <!-- Add more description details as needed -->
                </div>

                <!-- Content for Additional Information -->
                <div class="card-body col-lg-6" id="additionalInfoContent" style="display: none;">
                    <h5>Additional Information</h5>
                    <p>Package Type: Leisure</p>
                    <p>Tour Type: Group</p>
                    <p>Accommodation Type: Double</p>
                    <!-- Add more additional information as needed -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Show description content by default
            $("#descriptionContent").show();
            $("#additionalInfoContent").hide();

            // Toggle between description and additional information
            $("#toggleDescription").click(function() {
                $("#descriptionContent").show();
                $("#additionalInfoContent").hide();
            });

            $("#toggleAdditionalInfo").click(function() {
                $("#descriptionContent").hide();
                $("#additionalInfoContent").show();
            });
        });
    </script>

    @include('allfiles.footer')

</body>

</html>