@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>
            Les catégories
        </h1>

        <ul>
            @foreach ($categories as $category)
                <li>
                    {{ $category-> name }}
                </li>
            @endforeach
        </ul>

        <a href="{{ route('categoryAdd') }}" class="btn btn-primary">Ajouter une catégorie</a>
    </div>
@endsection