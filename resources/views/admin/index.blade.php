@extends('layout.admin')

@section('site-title')
    Tableau de bord
@endsection

@section('contenu')
    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbServices }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre total de services</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbProduits }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre total de produits</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbCategorieProduits }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre total de catégorie produits</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbAbonnes }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre total abonnés</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbAbonnesToday }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre d'abonnés du jour</p>
            </div>
        </div>
         <div class="col-lg-6">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbMessages }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre total de messages</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card px-4 py-2">
                <h3 class="card-title">{{ $nbMessagesToday }}</h3>
                <hr class="my-1">
                <p class="mb-0">Nombre de messages du jour</p>
            </div>
        </div>
    </div>
@endsection
