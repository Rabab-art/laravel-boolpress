@extends('layouts.app')

@section( 'content')

<div class="container">
    @if(session('alert-message'))
    <div class="alert alert-{{ session('alert-type')}}">
        {{ session('alert-message')}}</div>

    @endif
    <header class="my-5 d-flex justify-content-between align-items-center">
        <h1 class="my-5">I mie post</h1>
        <a href="{{ route ('admin.posts.create')}}" class="btn btn-success">Nuovo Post</a>
    </header>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"> #</th>
                <th scope="col"> Titolo</th>
                <th scope="col"> Scritto il </th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}#</th>
                <td>{{ $post->title}}</td>
                <td>{{ $post->getFormattedDate('created_at')}}</td>
                <td><a href="{{ route ('admin.posts.show',$post->id)}}" class="btn btn-primary">Vai</a></td>
                <td><a href="{{ route ('admin.posts.edit',$post->id)}}" class="btn btn-warning ml-2">Modifica</a></td>
                <td>
                    <form action="{{ route ('admin.posts.destroy', $post->id)}}" method="post" class="delete-button">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2">Elimina</button>
                    </form>
                </td>
            </tr>

            @empty

            <tr>
                <td colspan="3" class="text-center">Non ci sono post da visualizzare </td>
            </tr>

            @endforelse
        </tbody>
    </table>

        <footer class="d-flex justify-content-end">
            {{$posts->links() }}
        </footer>
    </div>
    
    @section( 'scripts')
    <script src="{{ asset('js/confirm-delete.js')}}"></script>
    @endsection

@endsection