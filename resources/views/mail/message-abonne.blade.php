@extends("layout.mail")

@section("sujet")
    {{ $sujet }}
@endsection

@section("titre")
    Abonnement à la newsletter <i><strong>Ma boutique</strong></i>
@endsection

@section("contenu")
    Bonjour <strong>{{ $email }}</strong>,<br>
    Vous recevez ce message car vous êtes abonné à notre newsletter.<br>
    Vous serez notifié par email à chaque nouvelle publication sur notre site<br>
    <hr>
    Merci ... Coordialement,<br>
    L’équipe de Ma boutique<br><br>
@endsection
