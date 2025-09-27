@extends('layout.site')

@section('site-title')
    Inscription
@endsection

@section('contenu')
    <p class="col-lg-8 mx-auto mb-4 text-center">
        S'inscrire
    </p>
    <form class="row col-xl-4 col-lg-8 mx-auto g-4" action="/register" method="post">
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
                <label for="name" class="form-label">Nom utilisateur</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom"
                    value="{{ old('name') }}" required>
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <div>
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Entrez votre mot de passe" value="{{ old('password') }}" required>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <div>
                <label for="password_confirmation" class="form-label">Confimer votre mot de passe</label>
                <input type="password" class="form-control" id="password_confirmation"
                    name="password_confirmation" placeholder="Entrez votre mot de passe"
                    value="{{ old('password_confirmation') }}" required>
            </div>
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
        </div>
    </form>
@endsection
