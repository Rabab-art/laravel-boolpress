
@if($post->exists)
    
<form method="POST" action="{{route('admin.posts.update', $post->id)}}">
    @method('PATCH')
@else
    <form method="POST" action="{{route('admin.posts.store')}}">
   @endif
        @csrf
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="scrivi" 
        value="{{$post->title}}" required>

    </div>

    <div class="form-group">
        <label for="content">Contenuto del post</label>
        <textarea class="form-control" id="content" name="content" rows="5" >{{$post->content}}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image"
            placeholder="Inserisci l'url di un'immagine" value="{{$post->image}}">
    </div>

    <button type="submit" class="btn btn-success">Salva</button>
</form>