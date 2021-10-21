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
        <a href="{{ route('postsList') }}" class="btn btn-primary">
            Home
        </a>

        <h1>
            Détails de : {{ $post->title }}
        </h1>

        <div class="row">
            <div class="col-md-6">
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
                        <textarea name="desc" id="desc" rows="10" required class="form-control">
                            {{ old('desc', $post->description) }}
                        </textarea>
                    </div>
        
                    <button type="submit" class="btn btn-warning">
                        Modifier
                    </button>
                </form>
            </div>

            <div class="col-md-6">
                {{-- DANS asset TOUJOURS METTRE DES GUILLEMETS (PAS DE SIMPLE QUOTE) --}}
                <img src="{{ asset("storage/$post->picture") }}" alt="">
                
                <form action="{{ route('postUpdatePicture', $post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        @method('PUT')
                        <label for="picture">Image</label>
        
                        <input type="file" name="picture" id="picture" class="form-control" required 
                                accept="image/png,image/jpeg,image/jpg">
                    </div>

                    <button class="btn btn-warning">
                        Modifier l'image
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection