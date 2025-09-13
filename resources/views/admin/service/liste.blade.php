@extends('layout.admin')

@section('site-title')
    Liste des services
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.service.ajouter') }}">Ajouter un service</a>
@endsection

@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width: 4rem">Image</td>
                <td style="width: 20rem">Titre</td>
                <td>Résumé</td>
                <td style="width: 2rem"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td class="text-center">
                        @if ($service->image)
                            <img class="img-thumbnail" src="{{ Storage::url($service->image) }}" alt="Image {{ $service->titre }}">
                        @else
                            <span class="text-muted small">N/A</span>
                        @endif
                    </td>
                    <td>{{ $service->titre }}</td>
                    <td>{{ $service->resume }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.service.modifier', ['id' => $service->id]) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Modifier
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $services->links() }}
@endsection
