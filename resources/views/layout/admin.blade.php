<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Administration - @yield('site-title', 'Accueil')
    </title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <style>
        label:has(+input:required, +textarea:required, +select:required)::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body class="py-5 px-lg-5">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8">
                @include('composant.navigation-admin')
                <h1 class="h1 fw-bolder text-start w-100">
                    @yield('site-title')
                </h1>
            </div>
            <div class="col-auto">
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2">
                    @yield('actions')
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="min-height: 100vh">
        @include('composant.alert')
        <div class="card bg-light mx-auto mt-5 shadow">
            <div class="card-body">
                @yield('contenu')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
