<!-- internationalpackages.blade.php -->
<style>
.container {
    margin-top: 100px;
            font-family: 'Nunito', sans-serif; 
       
}

.page-title {
    color: black;
}

.animated-title {
    display: inline-block;
    background-color: #3498db;
    color: #fff;
    padding: 5px;
    border-radius: 5px;
    transition: background-color 0.3s ease, font-size 0.3s ease;
}

.animated-title:hover {
    background-color: #2980b9;
}

.package-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-top: 20px;
}

.package {
    overflow: hidden;
    transition: transform 0.3s ease;
    transform-origin: center;
    width: 100%;
    position: relative;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.package img {
    display: block;
    width: 100%;
    height: auto;
    border-bottom: 1px solid #ddd;
}

.package:hover {
    transform: scale(1.05);
}

.package-details {
    padding: 10px;
    text-align: center;
}

.package-details h3 {
    margin-bottom: 5px;
    font-size: 1.2rem;
}

.package-details h4 {
    color: #3498db;
    margin-top: 0;
}

</style>


@include('allfiles.nav')

<div class="container">
    <h3 class="page-title">
        Packages for <span class="animated-title">{{ $local->title }}</span>
    </h3>
    <div class="package-container row">
        @foreach($localpackages as $localpackage)
        <div class="col-lg-3">
            <a href="{{ route('localpackagedetails', ['id' => $localpackage->id]) }}" class="card-link">
                <div class="package">
                    <img src="{{ asset('admin/assets/images/localpkg/' . $localpackage->image) }}" alt="Package Image">
                </div>
            </a>
            <div class="package-details">
                <h3>{{ $localpackage->title }}</h3>
                <h4>Price:{{ $localpackage->price }}</h4>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('allfiles.footer')


