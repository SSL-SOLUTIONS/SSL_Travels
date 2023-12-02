<link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

@extends('allfiles.admin')
<style>
        .form-groupp {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
        }

        textarea {
            resize: none;
            height: 50px; /* Set the desired height */
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
                <div class="card-header"><h2>Edit Tour</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('internationals.update', $international->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title"><b>Title</b></label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ $international->title}}" required>
                        </div>
                        
                        <div class="form-groupp">
                            <label for="title"><b>Description:</b></label>
                        <textarea name="description" id="description" cols="30" rows="0" required>{{ $international->description}}</textarea>                        
                        </div>
                      
                        <div class="form-group">
                            <label for="image"><b>Image</b></label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>

                        <div class="form-group">
                            <label for="currentImage"><b>Current Image</b></label>
                            <img src="{{ asset('admin/assets/images/internationals/' . $international->image) }}" alt="International Image" class="img-thumbnail">
                        </div>

                        <button type="submit" class="btn btn-primary mt-2"><b>Update</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
