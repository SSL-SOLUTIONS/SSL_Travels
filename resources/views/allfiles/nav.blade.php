<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('website/navbar/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">
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
        color: black;
    }
    .link-nav{
        padding: 10px;
        
    }
    .dropdown-content {
            
            position: fixed;
            background-color: aliceblue; 
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            padding: 10px;
            width: 300px; 
            justify-content: space-between;
          
        }
        .dropdown-content ul {
            list-style: none;
            padding: 10px;
            margin: 20px;
            
        }

        .dropdown-content li {
            width: calc(66.66%  80px); 
            margin-bottom: 10px; 
            
          
        }

        .dropdown-content li:nth-child(3n) {
            margin-right: 0;
            
        }

        .link-nav {
            text-decoration: none;
            color: #333; 
        }

        .li-drop-nav:hover .dropdown-content {
            display: block;
            flex-wrap: wrap; 
        }
        .active{
            color: wheat;
        }
.dropdown {
    position: relative;
}

.dropdown:hover .country-list {
    display: block;
}

.country-list {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    z-index: 1;
    width: 400px;
    padding: 10px;
}

.country-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 370px;
}

.country-list a {
    flex: 0 0 calc(33.333% - 10px);
    margin-bottom: 10px;
    padding: 10px;
    text-decoration: none;
    color: #333;
    box-sizing: border-box;
}
ul.links li a.links-nav {
    color: black;
}

ul.links li a.links-nav.active {
    color: blue !important;
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
    <a href="{{ route('international') }}" class="links-nav {{ request()->routeIs('international') ? 'active' : '' }}">
        International Tours
    </a>
    <div class="country-list">
        <div class="country-row">
            @foreach(\App\Models\International::all() as $international)
                <a href="{{ route('intpackages', ['id' => $international->id]) }}">{{ $international->title }}</a>
            @endforeach
        </div>
    </div>
</li>


<li class="dropdown">
    <a href="{{ route('local') }}" class="links-nav {{ request()->routeIs('local') ? 'active' : '' }}">
        Local Tours
    </a>
    <div class="country-list">
        <div class="country-row">
        @foreach(\App\Models\local::all() as $local)
                <a href="{{ route('locpackages', ['id' => $local->id]) }}">{{ $local->title }}</a>
            @endforeach
        </div>
    </div>
</li>
    
    <li>
        <a href="{{ route('about') }}" class="links-nav {{ request()->routeIs('about') ? 'active' : '' }}">
            About Us
        </a>
    </li>

    <li>
        <a href="{{ route('contact') }}" class="links-nav {{ request()->routeIs('contact') ? 'active' : '' }}">
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
    <script>
        $(document).ready(function() {
        
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
    $(document).ready(function () {
        $('.dropdown').hover(
            function () {
                // Hover in
                $(this).find('.country-list').css('display', 'block');
            },
            function () {
                // Hover out
                $(this).find('.country-list').css('display', 'none');
            }
        );
    });
</script>

</body>

</html>