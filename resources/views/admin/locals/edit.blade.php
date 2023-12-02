<link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

@extends('allfiles.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Edit Tour</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('locals.update', $local->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title"><b>Title</b></label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $local->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Description</b></label>
                            <input type="text" name="description" class="form-control" id="description" value="{{ $local->description }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image"><b>Image</b></label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>

                        <div class="form-group">
                            <label for="currentImage"><b>Current Image</b></label>
                            <img src="{{ asset('admin/assets/images/locals/' . $local->image) }}" alt="local Image" class="img-thumbnail">
                        </div>

                        <button type="submit" class="btn btn-primary mt-2"><b>Update</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
