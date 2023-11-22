@include('allfiles.nav')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('/images/slide.jpg')}}" class="img-fluid d-block w-100" alt="..." style="height: 100%;">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/images/slider.jpg')}}" class="img-fluid d-block w-100" alt="..."style="height:  100%;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div id="scroll-to-top"><i class="fas fa-angle-up"></i></div>
        <div class="whatsapp-icon">
            <a href="https://wa.me/+923011114504" target="_blank">
                <img src="{{asset('/images/whatsapp.PNG')}}" alt="WhatsApp">
            </a>
        </div>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
            const heading = document.querySelector("h1");

            // Function to apply the zoom-out effect
            function applyZoomOutEffect() {
                heading.style.transform = "scale(0.8)"; // You can adjust the scale value
                heading.style.fontWeight = "bold"; // Adjust the font weight
            }

            // Reload the page after a delay
            setTimeout(function() {
                applyZoomOutEffect();
            }, 500);
        });
    </script>
@include('allfiles.footer')