@extends('layouts.layout')

@section('content')
    {{-- <div class="details" style="max-width:800px; margin:0 auto;">
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
    </div> --}}

    <div class="container">
        <h1>
            Détails de : {{ $post->title }}
        </h1>

        <form method="post" action="{{ route('postUpdate', $post->id) }}">
            @csrf

            @method('PUT')

            <div class="form-group">
                <label for="titre">Titre : </label>
                <input type="text" name="titre" id="titre" required class="form-control" value="{{ old('titre', $post->title) }}">
            </div>

            <div class="form-group">
                <label for="extrait">Extrait : </label>
                <input type="text" name="extrait" id="extrait" required class="form-control" value="{{ old('extrait', $post->extrait) }}">
            </div>

            <div class="form-group">
                <label for="desc">Description : </label>
                <textarea name="desc" id="desc" cols="30" rows="10" required class="form-control">
                    {{ old('desc', $post->description) }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-warning">
                Modifier
            </button>
        </form>
    </div>
@endsection