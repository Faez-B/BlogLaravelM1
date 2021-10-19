@extends('layouts.layout')

@section('content')
    
    <h1>
        Ma liste d'articles
    </h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>
                    {{ $post->title }}
                </h2>

                <p>
                    {{ $post->extrait }}
                </p>
            </li>
        @endforeach
    </ul>



@endsection