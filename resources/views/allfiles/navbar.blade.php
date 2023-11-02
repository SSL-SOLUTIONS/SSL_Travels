    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{('website/navbar/css/style.css')}}">
 
 
    </head>
    <body>
    <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <a href="{{url('/')}}" class="logo-nav">
                    <img   src="{{('website/navbar/images/logo.png')}}" style="height: 60px;" alt="">
                </a>
            </div>
            <ul class="links">
            <li>
                    <a href="{{route('vacations')}}" class="links-nav">
                      Vacations
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{route('destinations')}}" class="links-nav">
                        Destinations
                    </a>
                </li>
                <li>
                    <a href="{{route('transport')}}" class="links-nav">
                        Transport
                    </a>
                </li>
                <li>
                    <a href="{{route('activities')}}" class="links-nav">
                  Activities
                    </a>
                </li>
                <li>
                    <a href="{{route('about')}}" class="links-nav">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="links-nav">
                        Contact
                    </a>
                </li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
        <img class="hero-img" src="{{('website/navbar/images/hero.jpg')}}" alt="">
        <div id="scroll-to-top"><i class="fas fa-angle-up" ></i></div>
        <div class="whatsapp-icon">
    <a href="https://wa.me/+923011114504" target="_blank">
        <img src="{{asset('/images/whatsapp.PNG')}}" alt="WhatsApp">
    </a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Show the scroll-to-top circle when the user scrolls down
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });

    $('#scroll-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});
</script>
<script>
    window.addEventListener("scroll", function() {
        var whatsappIcon = document.querySelector(".whatsapp-icon");
        if (window.scrollY > 100) { // Adjust the scroll threshold as needed
            whatsappIcon.style.display = "block";
        } else {
            whatsappIcon.style.display = "none";
        }
    });
</script>

    </body>
    </html>
    