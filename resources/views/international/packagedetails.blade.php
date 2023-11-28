<!-- packagedetails.blade.php -->
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
            <img src="{{ asset('admin/assets/images/internationals/' . $packageDetails->image) }}" alt="Package Image" class="img-thumbnail">
        </div>
        <div class="col-lg-6">
    <div class="card">
        <div class="card-body">
        <h3 style="font-weight:bold" class="page-title">{{ $packageDetails->title }}</h3>
        <div class="d-flex">
<h4 style="font-weight:bold" class="page-title">Price: 
</h4>
<h5  class="mt-1" style="font-weight:bold">{{ $packageDetails->price }}
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


        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <!-- Button to toggle description -->
                    <div class="card-header">
                        <button class="btn btn-link" id="toggleDescription">Description</button>
                    </div>

                    <!-- Content for both Description and Additional Details -->
                    <div class="card-body" id="descriptionContent" style="display: none;">
                        <h5>Description</h5>
                        <p>+92 301 111 4504</p>
                        <p>Sri Lanka Visa</p>
                        <p>Accommodation in the Double/ Twin occupancy at the above hotels or similar (07 nights)</p>
                        <p>Travel insurance</p>
                        <p>Meals are on bed & breakfast basis</p>
                        <p>Transport in an A/C Vehicle with the services of an English speaking Chauffeur as per the itinerary except during free times.</p>
                        <p>All government taxes</p>
                        <p>International Ticket ( Lahore – Colombo – Lahore )</p>
                    </div>

                    <!-- Button for Additional Information -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-link" id="toggleAdditionalInfo" onclick="toggleAdditionalInfo()">Additional Information</a>
                    </div>

                    <!-- Content for Additional Information -->
                    <div id="additionalInfoContent" style="display: none;">
                        <p>Package Type: Leisure</p>
                        <p>Tour Type: Group</p>
                        <p>Accommodation Type: Double</p>
                    </div>
                </div>
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