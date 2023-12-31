<link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

@extends('allfiles.admin')

@section('content')
<style>
    /* Add CSS styles to make it stylish and responsive */
    .card {
        margin: 20px;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    select {
        padding: 8px;
        font-size: 14px;
    }

    select option:checked {
        font-weight: bold;
    }
</style>

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
                    <h2>Update Package</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('internationalspackages.update', $internationalspackages->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- form.blade.php -->
                        <div class="form-group">
                            <label for="international_id" class="col-md-2 col-form-label">Country</label>
                            <div>
                                <select name="international_id" id="international_id" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach(\App\Models\International::all() as $international)
                                    <option value="{{ $international->id }}">{{ $international->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title"><b>Title:</b></label>
                            <input type="text" name="title" class="form-control" id="title" required value="{{ $internationalspackages->title}}">
                        </div>

                        <div class="form-group">
                            <label for="price"><b>Price:</b></label>
                            <input type="" name="price" class="form-control" id="price" required value="{{ $internationalspackages->price}}">
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Description:</b></label>
                            <textarea name="description" id="description" cols="67" rows="1" >{{ $internationalspackages->description}}</textarea>                        
                        </div>

                        <div class="form-group">
                            <label for="image"><b>Image:</b></label>
                            <input type="file" name="image" class="form-control" id="image" >
                        </div>
                        <div class="form-group">
                            <label for="currentImage"><b>Current Image</b></label>
                            <img src="{{ asset('admin/assets/images/internationals/' . $internationalspackages->image) }}" alt="International Image" class="img-thumbnail">
                        </div>

                        <!-- Add other fields as needed -->

                        <button type="submit" class="btn btn-primary"><b>Update</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection