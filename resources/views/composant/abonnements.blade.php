<h2 class="fw-bolder mt-5 text-center">
	Abonnez vous
</h2>

<div class="col-lg-6 mx-auto text-center mb-5">
	<p>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iste deserunt, nisi fugiat corrupti natus accusamus autem tempore repellat eaque, culpa aspernatur distinctio nihil quidem molestias, temporibus
		explicabo
		eum provident!
	</p>
	<form class="row g-4" action="{{ route('abonnement.post') }}" method="POST">
        @csrf
		<div class="col-lg-8">
            <input class="form-control shadow" autocomplete="email" type="email" placeholder="benin@example.com" value="{{ old('email-abonne') }}" name="email-abonne" id="email-abonne">
            @error('email-abonne')
                <span class="text-danger">{{ $message }}</span>
            @enderror
		</div>
		<div class="col">
            <button class="btn btn-primary" style="width: 100%;display: block" type="submit">
                S'abonner
            </button>
        </div>
	</form>
</div>
