@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/post/{{$message->id}}" method="post">
                        <b>Title</b>: <br> 
                        {{method_field('PATCH')}}
                        <input type="text" required="true" name="name" value="{{$message -> name}}" placeholder="Title">
                        <br>
                        <b>Short description</b>:<br>
                        <textarea style="width:400px; height:100px"  name="description">{{$message -> desc}}</textarea>
                        <br>
                        <b>Category</b>: <br>
                        <select name="category" value="{{$message->category}}">
                            <option value="nature">Human</option>
                            <option value="nature">Nature</option>
                            <option value="country">Country</option>
                        </select>
                        <br>
                        <input type="file" required="true" class="btn" name="image" value="{{$message -> image}}"  placeholder="File">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
