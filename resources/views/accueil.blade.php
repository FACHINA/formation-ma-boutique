@extends('layout.site')

@section('contenu')
    @include("composant.hero")
    @include("composant.slide")
    @include("composant.reseaux-sociaux")
    <p class="text-center">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, voluptas? Soluta, excepturi provident fugiat accusantium officiis quidem, laboriosam quos, repellendus aliquam recusandae unde officia mollitia commodi nam dolorem quisquam veniam!
    </p>
    @include("composant.derniers-services")
    @include("composant.drapeaux")
    @include("composant.abonnements")
@endsection
