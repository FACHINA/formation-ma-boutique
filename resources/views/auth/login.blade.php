@extends('layout.site')

@section('site-title')
    Connexion
@endsection

@section('contenu')
    <p class="col-lg-8 mx-auto mb-4 text-center">
       Connectez-vous
    </p>
    <form class="row col-xl-4 col-lg-8 mx-auto g-4" action="/login" method="post">
        @csrf
        <div class="col-12">
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Entrez votre email"
                    value="{{ old('email') }}" required>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <div>
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe"
                    value="{{ old('password') }}" required>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </div>
    </form>

@endsection
