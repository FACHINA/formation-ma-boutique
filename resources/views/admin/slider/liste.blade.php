@extends('layout.admin')

@section('site-title')
    Liste des sliders
@endsection

@section('actions')
    <a class="btn btn-primary" href="{{ route('admin.slider.ajouter') }}">Ajouter un slider</a>
@endsection

@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width: 4rem">Image</td>
                <td style="width: 20rem">Titre</td>
                <td style="width: 2rem"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($sliders as $slider)
                <tr>
                    <td class="text-center">
                        @if ($slider->image)
                            <img class="img-thumbnail" src="{{ Storage::url($slider->image) }}" alt="Image {{ $slider->titre }}">
                        @else
                            <span class="text-muted small">N/A</span>
                        @endif
                    </td>
                    <td>{{ $slider->titre }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('admin.slider.modifier', ['id' => $slider->id]) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil"></i> Modifier
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
