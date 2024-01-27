<link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

@extends('allfiles.admin')
<style>
    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 5px;
    }

    textarea {
        resize: none;
        height: 50px;
        /* Set the desired height */
    }
</style>

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Create Car Package</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name"><b>name:</b></label>
                            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
                        </div>

                        <div class="form-group">
                            <label for="model"><b>Description</b></label>
                            <input type="text" name="model" class="form-control" id="model" value="{{ old('model') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="rent"><b>Rent</b></label>
                            <input type="text" name="rent" class="form-control" id="rent" value="{{ old('rent') }}" required>
                        </div>


                        <div class="form-group">
                            <label for="image"><b>Image:</b></label>
                            <input type="file" name="image" class="form-control" id="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary"><b>Save</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Add CSS styles to make it stylish and responsive */
    .card {
        margin: 20px;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>
</style>
@endsection