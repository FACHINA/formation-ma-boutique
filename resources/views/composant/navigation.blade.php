<div class="sticky-top bg-white">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-3">
                <img
                    src="{{ asset('assets/img/logo.svg') }}"
                    alt="logo"
                    class="py-2"
                    style="height: 4.5rem"
                >
            </div>
            <div class="col-6">
                <ul class="d-flex m-0 justify-content-center list-inline">
                    <li class="list-inline-item">
                        <a href="{{ route('accueil') }}">Accueil</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('a-propos') }}">A propos</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-3 text-end">
                <button class="btn btn-primary">Contactez-nous</button>
            </div>
        </div>
    </div>
    <hr class="m-0">
</div>
