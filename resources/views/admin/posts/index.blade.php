@extends('layouts.app')

@section( 'content')

<div class="container">
    <header class="my-5 d-flex justify-content-between align-items-center">
        <h1>I mie post</h1>
        <a href="{{ route ('admin.posts.create')}}" class="btn btn-success"></a>
    </header>

    <table class="table table-dark">
        <thead>
            <tr>
                <th class="col"> Titolo</th>
                <th class="col"> Scritto il </th>
                <th class="col"> </th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td>{{ $post->title}}</td>
                <td>{{ $post->getFormattedDtae('created_at')}}</td>
                <td><a href="{{ route ('admin.posts.show',$post->id)}}" class="btn btn-primay">Vai</a></td>
                <td><a href="{{ route ('admin.posts.edit',$post->id)}}" class="btn btn-primay">Modifica</a></td>
            <form action="{{ route ('admin.posts.destroy', $post->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger ml-2">Elimina</button>
            </form>
            </tr>

            @empty

            <tr>
                <td colspan="3" class="text-center">Non ci sono post da visualizzare </td>
            </tr>

            @endforelse
        </tbody>
    </table>
</div>