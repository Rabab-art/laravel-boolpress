@extends('layouts.app')

@section( 'content')
    <div class="container">
        <header>
            <h1>Crea un nuovo post</h1>
        </header>
        <section id="form">
            <form  method="POST" action="{{route('admin.posts.store')}}">
                @csrf
                <div class="form-group">
                  <label for="title">Titolo</label>
                  <input type="text" class="form-control" id="title" placeholder="scrivi" required>
        
                </div>
               
                <div class="form-group">
                  <label for="content">Contenuto del post</label>
                  <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'url di un'immagine">
                  </div>

                  <button type="submit" class="btn btn-success">Salva</button>
              </form>
        </section>

    </div>
@endsection