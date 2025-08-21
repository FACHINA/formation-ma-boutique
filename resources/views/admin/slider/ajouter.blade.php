@extends('layout.admin')

@section('site-title')
    Ajouter un slider
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.slider.liste') }}">Liste des sliders</a>
@endsection

@section('contenu')
    <form enctype="multipart/form-data" class="row g-3" action="{{ route('admin.slider.ajouter.post') }}" method="post">
        @csrf
        <div class="col-lg-8">
            <div>
                <label class="form-label" for="titre">Titre du slider</label>
                <input class="form-control" id="titre" name="titre" type="text" required
                    placeholder="Entrez le titre du slider" value="{{ old('titre') }}">
                @error('titre')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
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
        <div class="col-12">
            <div>
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="10"
                    placeholder="Décrivez le slider en détail">{{ old('description') }}</textarea>
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
