<!-- localpackagedetails.blade.php -->
<style>
    /* Add a style tag or use a separate CSS file to define the custom styles */
   /* public/css/styles.css */

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
            <img src="{{ asset('admin/assets/images/localpkg/' . $localpackageDetails->image) }}" alt="Package Image" class="img-thumbnail">
        </div>
        <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
        <h3 style="font-weight:bold" class="page-title">{{ $localpackageDetails->title }}</h3>
        <div class="d-flex">
<h4 style="font-weight:bold" class="page-title">Price: 
</h4>
<h5  class="mt-1" style="font-weight:bold">{{ $localpackageDetails->price }}
</div>
<h4 style="font-weight:bold">Details:</h4>
<h6>{{ $localpackageDetails->description }}.</h6>
                
            <br>
            <button class="button mb-3 p-1 int-btn">
                <a style="text-decoration: none;" href="{{route('contact')}}">Book Now</a>
            </button>
           
        </div>
    </div>
    <br>
</div>
<div class="container">
        <div class="row">
            <div class="card ">
                <!-- Button to toggle description -->
                <div class="card-header">
                    <button class="btn btn-link" id="toggleDescription">Description</button>
                </div>

                <!-- Content for Description -->
                <div class="card-body col-lg-6" id="descriptionContent" style="display: none;">
                    <h5>Description</h5>
                    <p>Contact: +92 301 111 4504</p>
                    <p>Destination: Sri Lanka</p>
                    <p>Accommodation: Double/Twin occupancy at selected hotels (7 nights)</p>
                    <p>Travel insurance included</p>
                    <p>Meals: Bed & breakfast basis</p>
                    <p>Transport: A/C Vehicle with English-speaking Chauffeur</p>
                    <p>Taxes: All government taxes included</p>
                    <p>International Ticket: Lahore – Colombo – Lahore</p>
                </div>

                <!-- Button for Additional Information -->
                <div class="card-footer">
                    <a href="#" class="btn btn-link" id="toggleAdditionalInfo" onclick="toggleAdditionalInfo()">Additional Information</a>
                </div>

                <!-- Content for Additional Information -->
                <div class="card-body col-lg-6" id="additionalInfoContent" style="display: none;">
                    <p>Package Type: Leisure</p>
                    <p>Tour Type: Group</p>
                    <p>Accommodation Type: Double</p>
                </div>
            </div>
        </div>
    </div>


<script>
    // JavaScript to toggle the visibility of the description content
    document.getElementById('toggleDescription').addEventListener('click', function () {
        var descriptionContent = document.getElementById('descriptionContent');
        descriptionContent.style.display = (descriptionContent.style.display === 'none' || descriptionContent.style.display === '') ? 'block' : 'none';
    });

    function toggleAdditionalInfo() {
        var additionalInfoContent = document.getElementById('additionalInfoContent');
        additionalInfoContent.style.display = (additionalInfoContent.style.display === 'none' || additionalInfoContent.style.display === '') ? 'block' : 'none';
    }
</script>

@include('allfiles.footer')