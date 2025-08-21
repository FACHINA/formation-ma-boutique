@props([
    'sliders' => []
])

<div id="carouselExample" class="carousel slide py-3">
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
            <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}">
                <img src="{{ Storage::url($slider->image) }}" style="aspect-ratio:16/7;object-position:top center;" class="d-block bg-secondary object-fit-cover w-100" alt="...">
            </div>
        @endforeach
        {{-- <div class="carousel-item">
      <img src="https://placehold.co/600x200" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://placehold.co/600x200" class="d-block w-100" alt="...">
    </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
