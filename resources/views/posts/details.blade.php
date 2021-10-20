@extends('layouts.layout')

@section('content')
    <div class="details" style="max-width:800px; margin:0 auto;">
        <h1>
            {{ $post->title }}
        </h1>

        <p>
            {{ $post->description }}
        </p>

        <p>
            Créé le {{ $post->created_at }}
        </p>

        <a href="{{ route('postsList') }}" class="btn btn-primary">
            Go back
        </a>

        <a href="{{ route('postUpdate', $post->id) }}" class="btn btn-primary">
            Modifier
        </a>
    </div>
@endsection