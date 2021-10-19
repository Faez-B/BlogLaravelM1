@extends('layouts.layout')

@section('content')
    <div class="details" style="max-width:800px; margin:0 auto;">
        <h2>
            {{ $post->title }}
        </h2>

        <p>
            {{ $post->description }}
        </p>

        <a href="/posts">
            <button>
                Go back
            </button>
        </a>
    </div>
@endsection