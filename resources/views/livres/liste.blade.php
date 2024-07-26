@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Livres</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Nombre de Pages</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livres as $livre)
                <tr>
                    <td>{{ $livre->titre }}</td>
                    <td>{{ $livre->description }}</td>
                    <td>{{ $livre->nombrepage }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
