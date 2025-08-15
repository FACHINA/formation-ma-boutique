@extends('layout.admin')

@section('site-title')
    Liste des produits
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.produit.ajouter') }}">Ajouter un produit</a>
@endsection

@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width: 6rem">Image</td>
                <td style="width: 20rem">Titre</td>
                <td style="width: 6rem">Catégorie</td>
                <td>Résumé</td>
                <td style="width: 2rem"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td class="text-center">
                        @if ($produit->image)
                            <img class="img-thumbnail" src="{{ Storage::url($produit->image) }}" alt="Image {{ $produit->titre }}">
                        @else
                            <span class="text-muted small">N/A</span>
                        @endif
                    </td>
                    <td>{{ $produit->titre }}</td>
                    <td>{{ $produit->categorie->nom }}</td>
                    <td>{{ $produit->resume }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.produit.modifier', ['id' => $produit->id]) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Modifier
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
