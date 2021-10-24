
@if($post->exists)
    
<form method="POST" action="{{route('admin.posts.update', $post->id)}}">
    @method('PATCH')
@else
    <form method="POST" action="{{route('admin.posts.store')}}">
   @endif
        @csrf
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="scrivi" 
        value="{{old ('title', $post->title)}}" >

       <div class="invalid-feedback">
           @error('title')
               {{$message}}
           @enderror
       </div>

    </div>

    <div class="form-group">
        <label for="content">Contenuto del post</label>
        <textarea class="form-control  @error('content') is-invalid @enderror" id="content" name="content" rows="5" >{{old ('content',$post->content)}}</textarea>
        <div class="invalid-feedback">
            @error('content')
                {{$message}}
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
            placeholder="Inserisci l'url di un'immagine" value="{{old('image',$post->image)}}">
            <div class="invalid-feedback">
                @error('image')
                    {{$message}}
                @enderror
            </div>
        </div>

    <button type="submit" class="btn btn-success">Salva</button>
</form>