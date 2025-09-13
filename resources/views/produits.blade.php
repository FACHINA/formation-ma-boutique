@extends('layout.site')

@section('site-title')
    Produits
@endsection

@section('contenu')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptas? Soluta, excepturi provident fugiat accusantium
    officiis quidem, laboriosam quos, repellendus aliquam recusandae unde officia mollitia commodi nam dolorem quisquam
    veniam!
    <div class="row g-4 mt-5 mb-4">

        <form class="input-group" method="get">
            <input type="search" class="form-control" name="recherche" placeholder="Recherchez un produit"
                value="{{ request()->query('recherche') }}">
            <select class="form-select" name="categorie" id="categorie">
                <option value="">Filter par categorie</option>
                @foreach ($categories as $categorie)
                    <option @selected(request()->query('categorie')) value="{{ $categorie->slug }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
            <button class="btn btn-sm btn-primary">
                <i class="bi bi-search"></i>
            </button>
        </form>

        {{ $produits->links() }}

        @foreach ($produits as $produit)
            <div class="col-md-6 col-lg-4">
                <div class="card" style="border: none">
                    <img class="card-img-top rounded-4 border shadow-sm object-fit-contain" style="aspect-ratio: 4/3;"
                        src="{{ $produit->image ? Storage::url($produit->image) : 'https://placehold.co/400x300' }}"
                        alt="...">
                    <div class="card-body px-0">
                        <strong class="text-primary">{{ $produit->categorie->nom ?? '-' }}</strong>
                        <h5 class="card-title h3 fw-bold">{{ $produit->titre }}</h5>
                        <p class="card-text">{{ $produit->description }}</p>
                        <a class="link link-primary text-decoration-none"
                            href="{{ route('produits.fiche', ['slug' => $produit->slug]) }}">
                            En savoir plus
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $produits->links() }}
    </div>
@endsection
