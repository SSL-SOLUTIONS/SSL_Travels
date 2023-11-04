@extends('allfiles.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div  class="card-header"><h2>Create Destination</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('destinations.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="location"><b>Location:</b></label>
                            <input type="text" name="location" class="form-control" id="location" value="{{old('location')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="image"><b>Image:</b></label>
                            <input type="file" name="image" class="form-control" id="image"required>
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
