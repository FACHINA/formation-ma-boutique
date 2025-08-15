@extends('layout.admin')

@section('site-title')
    Ajouter une catégorie de produit
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.categorie.liste') }}">Liste des categories</a>
@endsection

@section('contenu')
    <form enctype="multipart/form-data" class="row g-3" action="{{ route('admin.categorie.ajouter.post') }}" method="post">
        @csrf
        <div class="col-lg-8">
            <div>
                <label class="form-label" for="nom">Nom de la categorie</label>
                <input class="form-control" id="nom" name="nom" type="text" required
                    placeholder="Entrez le nom de la categorie" value="{{ old('nom') }}">
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
                    placeholder="Décrivez la catégorie en détail">{{ old('description') }}</textarea>
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
