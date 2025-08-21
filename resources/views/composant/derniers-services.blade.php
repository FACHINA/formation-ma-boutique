@props([
    'services' => []
])

<h2 class="fw-bolder my-2 text-center">
    Derniers services
</h2>
<p class="text-center">Les services à la une ! Découvrez notre catalogues ...</p>
<div class="row g-4">

    @foreach ($services as $service)
        <div class="col-md-6 col-lg-4">
            <div class="card" style="border: none">
                <img class="card-img-top rounded-4 border shadow-sm object-fit-contain" style="aspect-ratio: 4/3;"
                    src="{{ $service->image ? Storage::url($service->image) : 'https://placehold.co/400x300' }}"
                    alt="...">
                <div class="card-body px-0">
                    <h5 class="card-title h3 fw-bold">{{ $service->titre }}</h5>
                    <p class="card-text">{{ $service->description }}</p>
                    <a class="link link-primary text-decoration-none"
                        href="{{ route('services.fiche', ['slug' => $service->slug]) }}">
                        En savoir plus
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
