<p class="text-center text-muted small mt-4">Suivez nous sur nos résaux</p>

@php
    $socials = [
        ["link" => "https://facebook.com", "icon" => "bi bi-facebook"],
        ["link" => "https://whatsapp.com", "icon" => "bi bi-whatsapp"],
        ["link" => "https://linkedin.com", "icon" => "bi bi-linkedin"],
        ["link" => "https://instagram.com", "icon" => "bi bi-instagram"],
        ["link" => "https://x.com", "icon" => "bi bi-twitter-x"],
        ["link" => "https://threads.com", "icon" => "bi bi-threads"],
    ];
@endphp

<ul class="d-flex justify-content-center list-inline gap-3 fs-4 mb-5">
	@foreach ($socials as $s)
    <li>
		<a href="{{ $s["link"] }}">
			<i class="{{ $s["icon"] }}"></i>
		</a>
	</li>
    @endforeach
</ul>
