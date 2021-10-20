@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>
            Ma liste d'articles
        </h1>

        <a href="/posts/ajouter">
            Ajouter un post
        </a>
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{-- <a href="/posts/details/{{ $post->id }}"> --}}
                    <a href="{{ route('postDetails', ["id" => $post->id]) }}">
                        <h2>
                            {{ $post->title }}
                        </h2>
                    </a>

                    <p>
                        {{ $post->extrait }}
                    </p>

                    <form action="{{ route('postDelete', $post->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        
                        <button class="btn btn-danger btn-sm">
                            Supprimer
                        </button>
                    
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection