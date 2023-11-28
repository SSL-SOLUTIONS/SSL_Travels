@extends('allfiles.admin')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h2>Local Tours Packages</h2>
    <a href="{{ route('localpackages.create') }}" class="btn btn-primary mb-2"><b>Add New Local Package</b></a>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Country</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\App\Models\LocalPackage::all() as $localpackage)
                <tr>
                    <td> {{$localpackage->id}} </td>
                    <td>{{ $localpackage->title }}</td>
                    <td>{{ $localpackage->price }}</td>
                    <td>{{ $localpackage->local->title }}</td>
                    <td>{{ $localpackage->description }}</td>

                    <td>
                        <img src="{{ asset('admin/assets/images/localpkg/' . $localpackage->image) }}" alt="local Image" class="img-thumbnail">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('internationalspackages.edit', $localpackage->id) }}">Edit</a>
                        <form action="{{ route('internationalspackages.destroy', $localpackage->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        /* Add CSS styles to make it stylish and responsive */
        .container {
            max-width: 100%;
            padding: 15px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px 12px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .img-thumbnail {
            max-width: 100px;
            height: auto;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</div>
@endsection