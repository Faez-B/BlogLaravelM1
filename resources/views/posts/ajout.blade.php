@extends('layouts.layout')

@section('content')
    <div class="list" style="max-width: 900px; margin: 0 auto;">

        <h1>
            Formulaire de création d'un article
        </h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur inventore quam minima sapiente eius molestias, voluptates quas corrupti numquam dolor illum sint laboriosam commodi provident fuga ipsa praesentium. Cupiditate, ullam!
        </p>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p style="color: red;">
                    {{ $error }}
                </p>
            @endforeach
        @endif

        <form method="post" action="{{ route('postAdd') }}" 
            enctype="multipart/form-data">
        {{-- <form method="post" action="{{ route('postStore') }}"> --}}
            
            @csrf

            <div class="form-group">
                <label for="titre">Titre : </label>
                <input type="text" name="titre" id="titre" required class="form-control" value="{{ old('titre') }}">
            </div>

            <div class="form-group">
                <label for="extrait">Extrait : </label>
                <input type="text" name="extrait" id="extrait" required class="form-control" value="{{ old('extrait') }}">
            </div>

            <div class="form-group">
                <label for="desc">Description : </label>
                <textarea name="desc" id="desc" cols="30" rows="10" required class="form-control">
                    {{ old('desc') }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="picture">Image</label>

                <input type="file" name="picture" id="picture" class="form-control" required accept="image/png,image/jpeg,image/jpg">
            </div>

            <input type="submit" value="Créer le post" class="btn btn-primary">
        </form>

        <br>

        <a href="{{ route('postsList') }}" class="btn btn-primary">
            Annuler
        </a>
    </div>
@endsection