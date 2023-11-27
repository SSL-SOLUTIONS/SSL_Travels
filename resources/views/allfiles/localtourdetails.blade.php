<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('website/local/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <title>SSL Travels & Tours</title>
    <style>
        body{
            font-family: 'Nunito', sans-serif; 
        }
    </style>
    <style>
   
    </style>
</head>

@include('allfiles.nav')
<body class="full-bg">


    <div class="container">
         <h2 style="font-weight: bold; margin-top:100px;" class="text-center text-bold">Tours Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <div style="width: 50%;"  class="image container bg">
                    <img class="img ml-5"
                         src="{{ asset('admin/assets/images/locals/' . $local->image) }}" 
                         alt="">
                    <h5 style="font-weight: bold;" class="mt-3">
                        {{ $local->title }}
                    </h5>
                    <hr>
                    <div>
                        <button class="button mb-3 p-1"><a href="">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('allfiles.footer')

</body>

</html>

