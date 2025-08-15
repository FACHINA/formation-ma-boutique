@extends('layout.admin')

@section('site-title')
    Liste des categories
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.categorie.ajouter') }}">Ajouter une categorie</a>
@endsection

@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width: 20rem">Nom</td>
                <td>Description</td>
                <td style="width: 2rem"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <td>{{ $categorie->nom }}</td>
                    <td>{{ $categorie->description }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.categorie.modifier', ['id' => $categorie->id]) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Modifier
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
