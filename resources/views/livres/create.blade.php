@extends('layouts.app')
@section('content')
<div class="container">
<h1>Ajouter un Livre</h1>
 <form action="{{ route('livres.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" placeholder="Entrez le titre du livre" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrition" required></textarea>
        </div>
        <div class="form-group">
            <label for="nombrepage">Nombre de pages</label>
            <input type="number" name="nombrepage" id="nombrepage" placeholder="Nombre De Pages">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <a href="{{ route('livres.liste') }}" class="btn btn-secondary">Voir la Liste des Livres</a>

</div>

@endsection