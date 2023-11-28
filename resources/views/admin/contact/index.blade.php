@extends('allfiles.admin')
@section('content')
 
 <style>
    table,th,td{
        border: 1px solid black;
    }
   
    
 </style>
<h1 style="text-align: center; margin-bottom:50px;">All Messages</h1>
@if (Session::has('success'))
    <div class="alert alert-success">{{ session('success') }}
    
    </div>
@endif
<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Time</th>
        <th>Status</th>
    </tr>
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
</table>
@endsection
