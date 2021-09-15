@extends('layouts.app')

@section('title', 'homepage')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>

                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>
                            <a href="" class="btn btn-outline-success">Show</a>
                            <a href="" class="btn btn-outline-warning">Edit</a>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div>
              {{$comics->links()}}
          </div>
    </div>

@endsection