<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

    <title>SSL Travels & Tours</title>
</head>

<body class="about-bg">
    @include('allfiles.nav')
    <div style="margin-top: 100px; margin-bottom:10px;" class="container">
        <h1 style="font-family:Arial, Helvetica, sans-serif ;font-weight:bolder">Packages</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
        @foreach($internationalpackages as $internationalpackage)
    <div style="width: 50%;" class="image container bg">
        <a href="{{ route('internationalpackages.show', ['id' => $internationalpackage->id]) }}">
            <img class="img ml-5"
                 src="{{ asset('admin/assets/images/internationals/' . $internationalpackage->image) }}" 
                 alt="">
        </a>
        <h5 style="font-weight: bold;" class="mt-3">
            {{ $internationalpackage->title }}
        </h5>
    </div>
@endforeach

            <h5 style="font-weight: bold;" class="mt-3">
                {{ $internationalpackages->title }}
            </h5>
            <hr>
            <div>
            <a href="{{ route('contact') }}" class="btn btn-outline-success">Book Now</a>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
@include('allfiles.footer')