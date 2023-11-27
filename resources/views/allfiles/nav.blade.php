<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('website/navbar/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <title>SSL Travels & Tours</title>
   
</head>
<style>
 
        body{
            font-family: 'Nunito', sans-serif; 
        }
   
    .link-nav{
        position: relative;
        right: 25px;
        
    }
    .link-nav{
        padding: 10px;
        
    }
    .dropdown-content {
            
            position: fixed;
            background-color: aliceblue; /* Set your desired background color */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            padding: 10px; /* Adjust padding as needed */
            width: 300px; /* Set the desired width */
            justify-content: space-between;
          
        }
        .dropdown-content ul {
            list-style: none;
            padding: 10px;
            margin: 20px;
            
        }

        .dropdown-content li {
            width: calc(66.66%  80px); /* Adjust the width and spacing between list items */
            margin-bottom: 10px; /* Adjust the spacing between rows */
            
          
        }

        .dropdown-content li:nth-child(3n) {
            margin-right: 0;
            
        }

        .link-nav {
            text-decoration: none;
            color: #333; /* Set your desired text color */
            
        }

        .li-drop-nav:hover .dropdown-content {
            display: block;
            flex-wrap: wrap; /* Enable wrapping for multiple rows */
        }

</style>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <a href="{{url('/')}}" class="logo-nav">
                <img src="{{asset('website/navbar/images/logo.png')}}" style="height: 60px;" alt="">
            </a>
        </div>
        <ul class="links">

            <li class="dropdown">
                <a href="{{route('international')}}" class="links-nav">
                    International Tours
                </a>
            </li>
            <li>
                <a href="{{route('local')}}" class="links-nav">
                    Local Tours
                </a>
            </li>
        
            
            <li>
                <a href="{{route('about')}}" class="links-nav">
                    About Us
                </a>
            </li>

            <li>
                <a href="{{route('contact')}}" class="links-nav">
                  Contact Us
                </a>
            </li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <div id="scroll-to-top"><i class="fas fa-angle-up"></i></div>

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

    </script>
</body>

</html>