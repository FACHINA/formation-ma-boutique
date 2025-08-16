@extends('layout.admin')

@section('site-title')
    Messages des internautes
@endsection


@section('contenu')
    <table class="table table-bordered">
        <thead>
            <tr>
                <td style="width: 20rem">Interanute</td>
                <td style="width: 2rem">Contact</td>
                <td style="width: 20rem">Sujet</td>
                <td>Message</td>
                <td style="width: 2rem"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>
                        {{ $contact->nom }}
                        <br>
                        {{ $contact->prenom }}
                    </td>
                    <td class="text-nowrap">
                        {{ $contact->email }}
                        <br>
                        {{ $contact->telephone }}
                    </td>
                    <td>
                        {{ $contact->sujet }}
                    </td>
                    <td>
                        {{ $contact->message }}
                    </td>
                    <td class="text-nowrap">
                        <a href="#" class="btn btn-sm btn-warning">
                            <i class="bi bi-envelope"></i> Répondre
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
