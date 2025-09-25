@extends('layout.admin')

@section('site-title')
    Abonnées
@endsection

@section('actions')
    <button data-bs-toggle="modal" data-bs-target="#diffusion" class="btn btn-primary">
        Faire une diffusion
    </button>
@endsection

@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width: 20rem">Email</td>
                <td style="width: 2rem"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($abonnes as $abonne)
                <tr>
                    <td>
                        {{ $abonne->email }}
                    </td>
                    <td class="text-nowrap">
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="bi bi-envelope"></i> Envoyer un message
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('modal')
    @include("admin.abonne._diffusion_large")
@endsection
