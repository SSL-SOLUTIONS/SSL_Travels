<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('website/local/style.css')}}">
    <title>SSL Travels & Tours</title>
    <style>
    button .link-a{
            text-decoration: none;
            color: red;
        }
    </style>
</head>
@include('allfiles.nav')
<body class="full-bg">
    <div>
        <img class="img-fluid" width="100%" src="
        https://zufta.pk/wp-content/uploads/2022/04/Fairy-Meadows-ZUFTA-4.jpg" alt="">
    </div>
    <div>
        <h2 style="font-weight: bold;" class="text-center mt-5 mb-4 text-bold">Local Tours</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach($locals as $local)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="image container bg">
                    <a class="link-a" href="{{ route('localdetails', ['id' => $local->id]) }}">
                        <img style="height: 200px;" class="img-fluid img ml-5" src="{{ asset('admin/assets/images/locals/' . $local->image) }}" alt="">
                        <h5 style="font-weight: bold;" class="mt-3">
                            {{ Illuminate\Support\Str::limit($local->title, $limit = 20, $end = '...') }}
                        </h5>
                    </a>
                    <hr>
                    <div>
                        <button class="button mb-3 p-1"><a href="">Book Now</a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('allfiles.footer')
</body>

</html>
