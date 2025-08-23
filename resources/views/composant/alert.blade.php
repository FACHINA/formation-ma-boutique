@session('success')
    <div class="alert alert-success" role="alert">
        {!! html_entity_decode($value) !!}
    </div>
@endsession

@session('error')
    <div class="alert alert-danger" role="alert">
        {!! html_entity_decode($value) !!}
    </div>
@endsession

@session('warning')
    <div class="alert alert-warning" role="alert">
        {!! html_entity_decode($value) !!}
    </div>
@endsession
