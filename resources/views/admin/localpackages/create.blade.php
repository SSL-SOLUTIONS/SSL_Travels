@extends('allfiles.admin')
<style>
    select {
        padding: 8px;
        /* Adjust the padding as needed */
        font-size: 14px;
        /* Adjust the font size as needed */
        /* Add any other styling you want for the select element */
    }

    /* Style for the selected option */
    select option:checked {
        font-weight: bold;
        /* Add any other styling for the selected option */
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
                    <h2>Create Package</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('localpackages.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- <div class="form-group">
                            <label for="international_id">Select Country:</label>
                            <div class="select-wrapper">
                                <input type="text" name="country" class="form-control" id="country"  required placeholder="Select Country">
                                <select name="international_id" id="international_id" onchange="updateCountry()">
                                    @foreach(\App\Models\International::all() as $international)
                                    <option value="{{ $international->id }}">{{ $international->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="local_id" class="col-md-2 col-form-label">Country</label>
                            <div>
                                <select name="local_id" id="local_id" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach(\App\Models\local::all() as $local)
                                    <option value="{{ $local->id }}">{{ $local->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="title"><b>Title:</b></label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="form-group">
                            <label for="price"><b>Price:</b></label>
                            <input type="" name="price" class="form-control" id="price" required>
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