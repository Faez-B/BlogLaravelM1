@extends('layouts.layout')

@section('content')
    <div class="container">
        <form action="{{ route('categoryStore') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Nom de la catégorie</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection