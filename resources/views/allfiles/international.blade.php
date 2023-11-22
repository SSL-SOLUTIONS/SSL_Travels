<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content here -->
</head>

@include('allfiles.nav')
<body class="full-bg">
    <div>
        <img class="img-fluid" width="100%" src="https://www.airocity.in/assets/images/europe_banner.jpg" alt="">
    </div>
    <div>
        <h2 style="font-weight: bold;" class="text-center mt-5 mb-4 text-bold">International Tours</h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach($internationals as $international)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="image container bg">
                    <a class="link-a" href="{{ route('internationaldetails', ['id' => $international->id]) }}">
                        <img style="height: 200px;" class="img-fluid img ml-5" src="{{ asset('admin/assets/images/internationals/' . $international->image) }}" alt="">
                        <h5 style="font-weight: bold;" class="mt-3">
                            {{ Illuminate\Support\Str::limit($international->title, $limit = 20, $end = '...') }}
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




