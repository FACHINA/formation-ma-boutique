@extends('layout.admin')

@section('site-title')
    Ajouter un produit
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.produit.liste') }}">Liste des produits</a>
@endsection

@section('contenu')
@dump($errors->all())
    <form enctype="multipart/form-data" class="row g-3" action="{{ route('admin.produit.ajouter.post') }}" method="post">
        @csrf
        <div class="col-lg-4">
            <div>
                <label class="form-label" for="image">Image</label>
                <input class="form-control" id="image" name="image" type="file" placeholder="Choisissez une image">
                @error('image')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <label class="form-label" for="prix">Prix</label>
                <input class="form-control" id="prix" name="prix" type="number" step="0.01" required
                    placeholder="Entrez le prix du produit" value="{{ old('prix') }}">
                @error('prix')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-8">
            <div>
                <label class="form-label" for="titre">Titre du produit</label>
                <input class="form-control" id="titre" name="titre" type="text" required
                    placeholder="Entrez le titre du produit" value="{{ old('titre') }}">
                @error('titre')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-4">
            <div>
                <label class="form-label" for="categorie_id">Catégorie du produit</label>
                <select class="form-select" name="categorie_id" id="categorie_id">
                    <option value="">Selectionnez une catégorie</option>
                    @foreach ($categories as $c)
                        <option @selected(old('categorie_id') == $c->id) value="{{ $c->id }}">{{ $c->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <div>
                <label class="form-label" for="resume">Résumé</label>
                <textarea class="form-control" id="resume" name="resume" required rows="4"
                    placeholder="Saisissez un résumé du produit">{{ old('resume') }}</textarea>
                @error('resume')
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
                    placeholder="Décrivez le produit en détail">{{ old('description') }}</textarea>
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
