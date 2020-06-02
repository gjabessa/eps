@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   
                    <div style="list-style-type:none;margin-bottom:5px;">
                        <li><b>{{$message->name}}</b></li>
                        
                        <div style="padding:5px;">
                        <li>{{$message->desc}}</li>
                        <li style="color:silver">{{$message->category}}</li>
                        <li>{{$message ->image}}</li>
                        
                         <a class="btn btn-small btn-info" href="{{ URL::to('post/' . $message->id . '/edit') }}">Edit</a>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('post/' . $message->id . '/delete') }}">Delete</a>
                        </div>
                    </div>

                    <a class="btn btn-small btn-success" href="{{ URL::to('/home') }}">Go back</a>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
