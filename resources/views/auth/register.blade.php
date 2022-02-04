@extends('access.register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div id="name" class="row mt-4 mb-4 me-4">
                            <label for="name" class="col-md-5 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="email" class="row mt-4 mb-4 me-4">
                            <label for="email" class="col-md-5 col-form-label text-md-end">{{ __('E-Mail') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="password" class="row mt-2 mb-4 me-4">
                            <label for="password" class="col-md-5 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div id="confirm" class="row mt-2 mb-3 me-4">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div id="register" class="row mb-6">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn-lg btn-primary">
                                    {{ __('Registro') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    {{-- <div class="row mt-3">
                        <a id="anterior" href="/"            >Volver</a>
                    </div> --}}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
