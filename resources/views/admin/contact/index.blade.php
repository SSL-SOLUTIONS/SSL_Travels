



@extends('allfiles.admin')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h2>All Messages</h2>
   
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Time</th>
        <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contactusmessages as $contactusmessage)
    <tr>
        <td>{{$contactusmessage->name}}</td>
        <td>{{$contactusmessage->email}}</td>
        <td>{{$contactusmessage->subject}}</td>
        <td>{{$contactusmessage->message}}</td>
        <td>{{$contactusmessage->created_at->format('M d, Y')}}</td>

        <td> 
            @if($contactusmessage->status == 0)
            <a href="{{route('contactus.show',$contactusmessage->id)}}" class="btn btn-warning text-white">Mark as read</a>    
            @else
                <i class="fa fa-envelope-open"></i>
            @endif
        </td>
    </tr>
    @endforeach
            </tbody>
        </table>
    </div>

    <style>
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

    </style>
</div>
@endsection





