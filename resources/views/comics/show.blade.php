@extends('layouts.app')

@section('title', $comic->title)

@section('content')

    <div class="container">

        <div class="row">
            <div class="col text-center py-3">
                <h2>{{$comic->title}}</h2>
            </div>
        </div>
        <div class="row align-items-center justify-content-around">
            <div class="col-2">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
            <div class="col-6">
                
                <p>{{$comic->description}}</p>
            
                <div class="btn btn-success my-2">Price: {{$comic->price}}</div>
            
            </div>
        </div>

    </div>
    
@endsection