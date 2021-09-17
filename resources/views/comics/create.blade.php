@extends('layouts.app')

@section('title', 'insert new comic')

@section('content')
    <div class="container">
        <form action="{{route('comics.store')}}" method="post">
            @csrf
            <h3 class="my-3">Inserimento nuovo prodotto</h3>
            <div class="my-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="my-3">
              <label for="description" class="form-label">Descrizione comic</label>
              <textarea type="text" name="description" class="form-control" id="description" placeholder="Inserisci la descrizione del comic">
              </textarea>
            </div>
            <div class="my-3">
                <label for="thumb" class="form-label">Link dell'immagine</label>
                <input type="text" name="thumb" class="form-control" id="thumb">
            </div>
            <div class="my-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" name="price" class="form-control" id="price">
            </div>
            <div class="my-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" name="series" class="form-control" id="series">
            </div>
            <div class="my-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" name="sale_date" class="form-control" id="sale_date">
            </div>
            <div class="my-3">
                <label for="type" class="form-label">Tipologia Comic</label>
                <select name="type" id="type" class="form-control">
                    <option value="">-- seleziona una tipologia --</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection