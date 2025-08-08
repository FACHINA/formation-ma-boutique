@extends('layout.site')

@section('site-title')
	{{ $service->titre }}
@endsection

@section('contenu')
	<p>
		{{ $service->resume }}
	</p>
	<div>
		{{ $service->description }}
	</div>
@endsection
