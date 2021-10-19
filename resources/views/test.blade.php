@extends('layouts.layout')

@section('title')
    Le titre de ma page
@endsection

@section('content')

    {{-- Si loading vaut true  --}}
    @if ($loading)
        <p>
            Chargement...
        </p>
        

    {{-- Sinon --}}
    @else
        <h1>
            Mon blog
        </h1>
        
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{ $post }}
                </li>   
            @endforeach
        </ul>
    @endif
@endsection