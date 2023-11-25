<!-- packagedetails.blade.php -->
<style>
    /* Add a style tag or use a separate CSS file to define the custom styles */
    #toggleDescription {
        color: black !important;
        text-decoration: none;
        margin-right: 15px;
    }

    #toggleAdditionalInfo {
        color: black !important;
        text-decoration: none;
        margin-right: 15px;
    }
  
    .int-btn {

background-color: white;
border: 1px solid blue;
}

.int-btn:hover {
    color: white;
background-color: blue;

}

.int-btn a {
color: blue;
}

.int-btn a:hover {
color: whitesmoke;
}

.in-btn:hover a {
color: whitesmoke;
}

</style>

@include('allfiles.nav')

<div style="margin-top:100px;" class="container">
    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('admin/assets/images/internationals/' . $packageDetails->image) }}" alt="Package Image" class="img-thumbnail">
        </div>
        <div class="col-lg-6">
            <h3 style="font-size: xx-large; font-weight:700;">{{ $packageDetails->title }}</h3>
            <h4  style="font-size: xx-large; font-weight:600;">Price: {{ $packageDetails->price }}</h4>
            <ul>
                <li>
                <h3 style="font-weight: 500;" >{{ $packageDetails->description }}</h3>
                </li>
            </ul><br><br>


            <!-- Add other package details here -->
            <button class="button mb-3 p-1 int-btn">
                <a style="text-decoration: none;" href="">Book Now</a>
            </button>
        </div>
      
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <!-- Button to toggle description -->
                    <div class="card-header">
                        <button class="btn btn-link" id="toggleDescription"> Description</button>
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
</div>
</div>
<script>
    // JavaScript to toggle the visibility of the description content
    document.getElementById('toggleDescription').addEventListener('click', function() {
        var descriptionContent = document.getElementById('descriptionContent');
        descriptionContent.style.display = (descriptionContent.style.display === 'none' || descriptionContent.style.display === '') ? 'block' : 'none';
    });

    function toggleAdditionalInfo() {
        var additionalInfoContent = document.getElementById('additionalInfoContent');
        additionalInfoContent.style.display = (additionalInfoContent.style.display === 'none' || additionalInfoContent.style.display === '') ? 'block' : 'none';
    }
</script>

@include('allfiles.footer')