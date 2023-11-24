@include('allfiles.nav')

<div style="margin-top:100px;" class="container">
    <h2 style="background-color: blue; color:white;" class="p-3">Packages for {{ $international->title}}</h2>
    <div class="row">
        @foreach($internationalspackages as $internationalpackage)
            <div class="col-lg-3">
                <a href="" class="card-link">
                    <div class="package bg-light">
                        <img src="{{ asset('admin/assets/images/internationals/' . $internationalpackage->image) }}" alt="local Image" class="img-thumbnail">
                        <h3>{{ $internationalpackage->title }}</h3>
                        <h4 class="">Price:{{ $internationalpackage->price}}</h4>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@include('allfiles.footer')
