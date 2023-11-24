@include('allfiles.nav')
<div class="container mt-5 text-center">
    <div class="row">
        <div class="col-lg-6 ">
        <h2 style="background-color: blue; color:white" class="mt-5 p-3" >Packages for {{ $international->title}}</h2>
            @if($internationalspackages)
                @foreach($internationalspackages as $internationalpackage)
                    <div class="package bg-light">
                        <img src="{{ asset('admin/assets/images/internationals/' . $internationalpackage->image) }}" alt="local Image" class="img-thumbnail">
                        <h3>{{ $internationalpackage->title }}</h3>
                        <h4 class="">Price:{{ $internationalpackage->price}}</h4>
                    </div>
                @endforeach
            @else
                <p>No packages available.</p>
            @endif
        </div>
    </div>
</div>

@include('allfiles.footer')