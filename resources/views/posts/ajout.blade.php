@extends('layouts.layout')

@section('content')
    <div class="list" style="max-width: 900px; margin: 0 auto;">
        <form method="post" action="ajouter">
            @csrf

            <label for="titre">Titre : </label>
            <input type="text" name="titre" id="titre">

            <br>

            <label for="extrait">Extrait : </label>
            <input type="text" name="extrait" id="extrait">

            <br>

            <label for="desc">Description : </label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>

            <br>
            <br>

            <input type="submit" value="Créer le post">
        </form>

        <a href="/posts">
            <button>
                Annuler
            </button>
        </a>
    </div>
@endsection