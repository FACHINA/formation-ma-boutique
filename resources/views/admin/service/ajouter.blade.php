@extends('layout.admin')

@section('site-title')
    Ajouter un service
@endsection

@section('actions')
    <a class="btn btn-primary" href="#">Ajouter des services</a>
@endsection

@section('contenu')
    <form enctype="multipart/form-data" class="row g-3" action="{{ route('admin.service.ajouter.post') }}" method="post">
        @csrf
        <div class="col-lg-8">
            <div>
                <label class="form-label" for="titre">Titre du service</label>
                <input class="form-control" id="titre" name="titre" type="text" required
                    placeholder="Entrez le titre du service" value="{{ old('titre') }}">
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
                <label class="form-label" for="resume">Résumé</label>
                <textarea class="form-control" id="resume" name="resume" required rows="4"
                    placeholder="Saisissez un résumé du service">{{ old('resume') }}</textarea>
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
                    placeholder="Décrivez le service en détail">{{ old('description') }}</textarea>
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
