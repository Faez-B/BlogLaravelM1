@extends('layouts.layout')

@section('content')
    <div class="ajout" style="max-width: 900px; margin: 0 auto;">
        <form method="POST" action="/posts/ajouter">
            @csrf

            <label for="titre">Titre : </label>
            <input type="text" name="titre" id="titre">

            <br>

            <label for="extrait">Extrait : </label>
            <input type="text" name="extrait" id="extrait">

            <br>

            <label for="desc">Description : </label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        </form>

    </div>
@endsection