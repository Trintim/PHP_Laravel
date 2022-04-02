<div class="form-row">
    <div class="form-group col-md-12 col-sm-12">
        <label for="name">Name</label>
        <div>
            <input type="text" id="name" name="name" value="{{ isset($contact) ? $contact->name : old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Ex: Victor Trintim">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label for="contact">Contato</label>
        <div>
            <input type="tel" id="contact" name="contact" value="{{ isset($contact) ? $contact->contact : old('contact') }}" class="form-control @error('contact') is-invalid @enderror" placeholder="Ex: 99999-9999">
            @error('contact')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group col-md-12 col-sm-12">
        <label for="email">E-mail</label>
        <div>
            <input type="email" id="email" name="email" value="{{ isset($contact) ? $contact->email : old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Ex: exemp@test.com">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <i class="fi-circle-cross"></i><strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>