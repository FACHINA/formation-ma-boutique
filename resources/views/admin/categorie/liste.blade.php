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
                <th style="width: 20rem">Nom</th>
                <th>Description</th>
                <th style="width: 2rem"></th>
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
                        <form onsubmit="return confirm('Souhaitez vous supprimer cet article ?')" class="d-inline" action="{{ route('admin.categorie.supprimer', ['id' => $categorie->id]) }}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">
                                 <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
