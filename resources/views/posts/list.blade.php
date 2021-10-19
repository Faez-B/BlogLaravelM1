@extends('layouts.layout')

@section('content')
    
    <h1>
        Ma liste d'articles
    </h1>

    <a href="/posts/ajouter">
        Ajouter un post
    </a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/details/{{ $post->id }}">
                    <h2>
                        {{ $post->title }}
                    </h2>
                </a>

                <p>
                    {{ $post->extrait }}
                </p>
            </li>
        @endforeach
    </ul>



@endsection