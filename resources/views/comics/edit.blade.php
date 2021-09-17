@extends('layouts.app')

@section('title', 'insert new comic')

@section('content')
    <div class="container">
        <form action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <h3 class="my-3">Modifica Comic</h3>
            <div class="my-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="title" value="{{$comic->title}}">
            </div>
            <div class="my-3">
              <label for="description" class="form-label">Descrizione comic</label>
              <textarea name="description" class="form-control" id="description" placeholder="Inserisci la descrizione del comic">{{$comic->description}}</textarea>
            </div>
            <div class="my-3">
                <label for="thumb" class="form-label">Link dell'immagine</label>
                <input type="text" name="thumb" class="form-control" id="thumb" value="{{$comic->thumb}}">
            </div>
            <div class="my-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" name="price" class="form-control" id="price" value="{{$comic->price}}">
            </div>
            <div class="my-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" class="form-control" id="series" value="{{$comic->series}}">
            </div>
            <div class="my-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" name="sale_date" class="form-control" id="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="my-3">
                <label for="type" class="form-label">Tipologia Comic</label>
                <select name="type" id="type" class="form-control">
                    <option value="" {{$comic->type == '' ? 'selected' : ''}}>-- seleziona una tipologia --</option>
                    <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic book</option>
                    <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>Graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection