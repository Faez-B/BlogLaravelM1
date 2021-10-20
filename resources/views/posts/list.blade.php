@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>
            Ma liste d'articles
        </h1>

        <a href="{{ route('postAdd') }}" class="btn btn-primary">
            Ajouter un post
        </a>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset("storage/$post->picture") }}" alt="" class="card-img" style="object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $post->title }}
                            </h5>

                            <p class="card-text">
                                {{ $post->extrait }}
                            </p>

                            <div class="btn-group">
                                <a href="{{ route('postDetails', $post->id) }}" class="btn btn-primary btn-lg">
                                    Détails
                                </a>

                                <form action="{{ route('postDelete', $post->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    
                                    <button class="btn btn-danger btn-lg">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{-- <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('postDetails', ["id" => $post->id]) }}">
                        <h2>
                            {{ $post->title }}
                        </h2>
                    </a>

                    <p>
                        {{ $post->extrait }}
                    </p>

                    <form action="{{ route('postDelete', $post->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                        
                        <button class="btn btn-danger btn-sm">
                            Supprimer
                        </button>
                    </form>
                </li>
            @endforeach
        </ul> --}}
    </div>
@endsection