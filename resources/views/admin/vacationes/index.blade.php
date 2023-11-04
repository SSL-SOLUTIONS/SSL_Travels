@extends('allfiles.admin')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h2>Vacations</h2>
    <a href="{{ route('vacationes.create') }}"class="btn btn-primary mb-2"><b>Add New Vacation</b></a>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacationes as $vacation)
                <tr>
                <td> {{ $vacation->id }} </td>
                    <td>{{ $vacation->title }}</td>
                    <td>
                        <img src="{{ asset('admin/assets/images/vacationes/' . $vacation->image) }}" alt="Vacation Image" class="img-thumbnail">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('vacationes.edit', $vacation->id) }}">Edit</a>
                        <form action="{{ route('vacationes.destroy', $vacation->id) }}" method="POST"
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
