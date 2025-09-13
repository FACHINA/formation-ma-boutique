@extends('layout.site')

@section('site-title')
    {{ $produit->titre }}
@endsection

@section('contenu')
    <div class="text-center mb-5">
        @if ($produit->image)
            <img class="img-fluid" src="{{ Storage::url($produit->image) }}" alt="Image {{ $produit->titre }}">
        @else
            <span class="text-muted small">N/A</span>
        @endif
    </div>
    <hr>
    <p>
        {{ $produit->resume }}
    </p>
    <div class="mb-5">
        {{ $produit->description }}
    </div>
@endsection
