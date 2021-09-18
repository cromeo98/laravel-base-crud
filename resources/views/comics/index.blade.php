@extends('layouts.app')

@section('title', 'comics')

@section('content')

    <div class="container">
        @if (session('update'))
        <p class="alert btn-outline-success mt-2">{{session('update')}}</p>     
        @endif
        @if (session('delete'))
        <p class="alert btn-outline-danger mt-2">{{session('delete')}}</p>     
        @endif
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
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-outline-success">Show</a>
                            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="post" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-outline-danger" type="submit" value="delete">
                            </form>
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