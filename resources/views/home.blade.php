@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <h2> Backgrounds </h2>
                    <b>First background </b>
                    <form enctype="multipart/form-data" action="/backgrounds" method="post">
                        <input type="file" required="true" class="btn" name="image" placeholder="File">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    <b>Second background </b>
                    <form enctype="multipart/form-data" action="/backgrounds2" method="post">
                        <input type="file" required="true" class="btn" name="image" placeholder="File">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="card-body">
                <h2> Gallery </h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" action="/" method="post">
                        <b>Title</b>: <br>
                        <input type="text" required="true" name="name" placeholder="Title">
                        <br>
                        <b>Short description</b>:<br>
                        <textarea style="width:400px; height:100px" name="description">
                        </textarea>
                        <br>
                        <b>Category</b>: <br>
                        <select name="category">
                            <option value="nature">Human</option>
                            <option value="nature">Nature</option>
                            <option value="country">Country</option>
                        </select>
                        <br>
                        <input type="file" required="true" class="btn" name="image" placeholder="File">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="card-body">
                   
                    @foreach($messages as $message)
                    <div style="list-style-type:none;margin-bottom:5px;">
                        <li><b>{{$message->name}}</b></li>
                        <div style="padding:5px;">
                        <li>{{$message->desc}}</li>
                        <li style="color:silver">{{$message->category}}</li>
                        <li><img style="max-width:100%" src="storage/{{$message ->image}}"></li>
                        <br>
                         <a class="btn btn-small btn-info" href="{{ URL::to('post/' . $message->id . '/edit') }}">Edit</a>
                         <a class="btn btn-small btn-danger" href="{{ URL::to('post/' . $message->id . '/delete') }}">Delete</a>
                        </div>
                    </div>
                    @endforeach
                    <hr>
                    {{$messages->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
