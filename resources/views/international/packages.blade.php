<!-- internationalpackages.blade.php -->
<style>
        .animated-title {
        display: inline-block;
        background-color: blue;
        color: white;
        padding: 5px;
        transition: background-color 0.3s ease, font-size 0.3s ease;
    }

    .animated-title:hover {
        background-color: darkblue;
    }
    .package {
        overflow: hidden;
        transition: transform 0.3s ease;
        transform-origin:center;
        width: 100%; /* Ensure the container takes the full width */
        position: relative; /* Position relative for proper child positioning */
    }

    .package img{
        display: block; /* Ensure the image behaves like a block element */
        width: 100%; /* Make the image take the full width of the container */
    }

    .package:hover {
        transform: scale(1.1);
    }


</style>

@include('allfiles.nav')

<div style="margin-top:100px;" class="container">
<h2 style=" color:black; font-size:xx-large; font-weight:600; font-family:Arial, Helvetica, sans-serif" class="p-3">Packages for <span class="animated-title">{{ $international->title }}</span></span></h2>
    <div class="row">
        @foreach($internationalspackages as $internationalpackage)
            <div class="col-lg-3">
                <a href="{{ route('packagedetails', ['id' => $internationalpackage->id]) }}" class="card-link">

                    <div class="package bg-light">
                        <img src="{{ asset('admin/assets/images/internationals/' . $internationalpackage->image) }}" alt="Package Image" class="img-thumbnail">
                        </a>
                        <h3>{{ $internationalpackage->title }}</h3>
                        <h4>Price: {{ $internationalpackage->price }}</h4>
                    </div>
                
            </div>
        @endforeach
    </div>
</div>

@include('allfiles.footer')

