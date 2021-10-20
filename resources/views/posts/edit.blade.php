@extends('layouts.layout')

@section('content')
    <div class="list" style="max-width: 900px; margin: 0 auto;">
        <form method="post" action="{{ route('postUpdate', $post->id ) }}">
            @csrf

            <label for="titre">Titre : </label>
            <input type="text" name="titre" id="titre" value="{{ $post->title }}">

            <br>

            <label for="extrait">Extrait : </label>
            <input type="text" name="extrait" id="extrait" value="{{ $post->extrait }}">

            <br>

            <label for="desc">Description : </label>
            <textarea name="desc" id="desc" cols="30" rows="10" value="{{ $post->description }}"></textarea>

            <br>
            <br>

            <input type="submit" value="Créer le post">
        </form>
        
        <a href="{{ route('postsList') }}" class="btn btn-primary">
            Annuler
        </a>
    </div>
@endsection