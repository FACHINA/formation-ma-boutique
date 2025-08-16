@extends('layout.site')

@section('site-title')
    Contact
@endsection

@section('contenu')
    <p class="col-lg-8 mx-auto mb-4 text-center">
        Si vous avez des questions, des suggestions ou si vous souhaitez simplement nous dire bonjour, n'hésitez pas à nous
        contacter en remplissant le formulaire ci-dessous. Nous sommes là pour vous aider et nous apprécions vos retours.
    </p>
    <form class="row g-4" action="{{ route('contact.post') }}" method="post">
        @csrf
        <div class="col-lg-4">
            <div>
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom"
                    value="{{ old('nom') }}" required>
            </div>
            @error('nom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-4">
            <div>
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom"
                    value="{{ old('prenom') }}" required>
            </div>
            @error('prenom')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-4">
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email"
                    value="{{ old('email') }}" required>
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-4">
            <div>
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ old('telephone') }}"
                    placeholder="Entrez votre téléphone">
            </div>
            @error('telephone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-8">
            <div>
                <label for="sujet" class="form-label">Sujet</label>
                <input type="text" class="form-control" id="sujet" name="sujet" value="{{ old('sujet') }}"
                    placeholder="Entrez le sujet de votre message" required>
            </div>
            @error('sujet')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
            <div class="">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Entrez votre message" required>{{ old('message') }}</textarea>
            </div>
            @error('message')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <button type="reset" class="btn btn-secondary">Réinitialiser</button>
        </div>
    </form>

    @include('composant.abonnements')
@endsection
