<link rel="icon" type="image/png" href="{{ asset('website/favicon.png') }}">

@extends('allfiles.admin')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h2>Internatinal Packages</h2>
    <a href="{{ route('internationalspackages.create') }}"class="btn btn-primary mb-2"><b>Add New International Package</b></a>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Country</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach(\App\Models\InternationalPackage::all() as $internationalpackage)
                <tr>
                <td> {{ $internationalpackage->id}} </td>
                    <td>{{ $internationalpackage->title }}</td>
                    <td>{{ $internationalpackage->price }}</td>
                    <td>{{ $internationalpackage->description }}</td>
                    <td>{{ $internationalpackage->international->title }}</td>
                    

                    <td>
                        <img src="{{ asset('admin/assets/images/internationals/' . $internationalpackage->image) }}" alt="local Image" class="img-thumbnail">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('internationalspackages.edit', $internationalpackage->id) }}">Edit</a>
                        <form action="{{ route('internationalspackages.destroy', $internationalpackage->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
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
        table, th, td{
            border: 1px solid black;
        }

        /* Add additional styling as per your requirements */
    </style>
</div>
@endsection
