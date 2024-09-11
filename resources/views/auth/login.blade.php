@extends('layouts.auth')

@section('content')
<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">
            Ingresa a tu cuenta
        </h2>
        <form action="{{ route('login') }}" method="POST" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">
                    Correo Electronico
                </label>
                <input type="email"
                       name="email"
                       id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       placeholder="CorreoElectronico@email.com"
                       autocomplete="off"
                       value="{{ old('email') }}"
                >

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="password" class="form-label">
                    Contraseña
                </label>

                <div class="input-group input-group-flat">
                    <input type="password"
                           name="password"
                           id="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Tu Contraseña"
                           autocomplete="off"
                    >

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="mb-2">
                <label for="remember" class="form-check">
                    <input type="checkbox" id="remember" name="remember" class="form-check-input"/>
                    <span class="form-check-label">Mantener Secion Activa</span>
                </label>
            </div>

            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">
                    Ingresar
                </button>
            </div>
        </form>
    </div>
</div>
<div class="text-center text-secondary mt-3">
    ¿No tienes cuenta aun? <a href="{{ route('register') }}" tabindex="-1">
        Registrate
    </a>

    <span class="form-label-description">
        <a href="{{ route('password.request') }}">Olvide mi Contraseña</a>
    </span>
</div>
@endsection
