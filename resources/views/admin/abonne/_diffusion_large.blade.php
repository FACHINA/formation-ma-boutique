    <div class="modal fade" id="diffusion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Faire une diffusion</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="diffusion-form" class="row g-3" action="{{ route('admin.abonne.send-message') }}"
                        method="post">
                        @csrf
                        <div class="col-lg-8">
                            <div>
                                <label class="form-label" for="sujet">Sujet</label>
                                <input class="form-control" id="sujet" name="sujet" type="text" required
                                    placeholder="Sujet du message" value="{{ old('sujet') }}">
                                @error('sujet')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div>
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="10" placeholder="Message à diffuser">{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button form="diffusion-form" class="btn btn-primary" type="submit">Envoyez le message</button>
                    <button form="diffusion-form" class="btn btn-secondary" type="reset"
                        data-bs-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>
