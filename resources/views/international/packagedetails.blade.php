<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: 100px;
    }

    .int-btn {
        background-color: blue;
        border: 1px solid blue;
    }

    .int-btn:hover {
        color: white;
    }

    .int-btn a {
        color: white;
    }

    .int-btn a:hover {
        color: whitesmoke;
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
</style>

@include('allfiles.nav')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('admin/assets/images/internationals/' . $packageDetails->image) }}" alt="Package Image" class="img-thumbnail">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h3 style="font-weight:bold" class="page-title">{{ $packageDetails->title }}</h3>
                    <div class="d-flex">
                        <h4 style="font-weight:bold" class="page-title">Price:
                        </h4>
                        <h5 class="mt-1" style="font-weight:bold">{{ $packageDetails->price }}
                    </div>
                    <h4 style="font-weight:bold">Details:</h4>
                    <h6>{{ $packageDetails->description }}.</h6>


                    <br>
                    <button class="button mb-3 p-1 int-btn">
                        <a style="text-decoration: none;" href="{{route('contact')}}">Book Now</a>
                    </button>

                </div>
            </div>
            <br>
        </div>

        <div class="row">
            <div class="card">
                
                <div class="card-header">
                    <button class="btn btn-link int-btn" id="toggleDescription">Description</button>
                    <button class="btn btn-link int-btn" id="toggleAdditionalInfo">Additional Information</button>
                </div>

                
                <div class="card-body col-lg-6" id="descriptionContent">
                    <h5>Description</h5>
                    <p>+92 301 111 4504</p>
                    <p> Azerbaijan E-visa</p>
                    <p> Accommodation in Hotel 6 nights including breakfast</p>
                    <p>Sightseeing In districts (Panoramic Tour, City tour, Old</p>
                    <p>City Tour, Absheron tour, Gobustan Tour, Gabala day</p>
                    <p>tour,Shopping tour)</p>
                    <p>Entrance for Gobustan museum, Fire Mountain, Fire</p>
                    <p>temple,Gabala cable car</p>
                    <p>Meals Full board</p>
                    <p>Professional English-speaking guide</p>
                    <p>2 Bottle Water per person per day</p>
                    <p>All transfers according to the program including airport transfers</p>
                    <p>Return International Ticket (Lahore-Baku Return)</p>
                    <p>Booking Date: First Come First Served</p>

                    
                </div>

                
                <div class="card-body col-lg-6" id="additionalInfoContent" style="display: none;">
                    <h5>Additional Information</h5>
                    <p>Package Type: Leisure</p>
                    <p>Tour Type: Group</p>
                    <p>Accommodation Type: Double</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        
        $("#descriptionContent").show();
        $("#additionalInfoContent").hide();

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