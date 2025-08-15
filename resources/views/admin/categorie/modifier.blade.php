@extends('layout.admin')

@section('site-title')
    Modifier une catégorie de produit
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.categorie.liste') }}">Liste des catégories</a>
    <a class="btn btn-primary" href="{{ route('admin.categorie.ajouter') }}">Ajouter une catégorie</a>
@endsection

@section('contenu')
    <form enctype="multipart/form-data" class="row g-3" action="{{ route('admin.categorie.modifier.post', ['id' => $categorie->id]) }}" method="post">
        @csrf
        <div class="col-lg-8">
            <div>
                <label class="form-label" for="nom">Nom de la catégorie de produit</label>
                <input class="form-control" id="nom" name="nom" type="text" required
                    placeholder="Entrez le nom de la catégorie de produit" value="{{ old('nom', $categorie->nom) }}">
                @error('nom')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div>
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10"
                    placeholder="Décrivez la catégorie en détail">{{ old('description', $categorie->description) }}</textarea>
                @error('description')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-secondary" type="reset">Annuler</button>
            <button class="btn btn-primary" type="submit">Enregistrer</button>
        </div>
    </form>
@endsection
