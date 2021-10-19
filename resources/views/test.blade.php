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
        <p>
            Fail
        </p>
        
    @endif
    {{-- <h1>
        Mon blog
    </h1> --}}
@endsection