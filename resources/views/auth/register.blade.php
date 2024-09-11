@extends('layouts.auth')

@section('content')
<form class="card card-md" action="{{ route('register') }}" method="POST" autocomplete="off">
    @csrf

    <div class="card-body">
        <h2 class="card-title text-center mb-4">Crear una Cuenta Nueva</h2>
        <div class="mb-3">
            <label for="username" class="form-label">Primer Nombre</label>
            <input type="text" name="username" id="username"
                   class="form-control @error('username') is-invalid @enderror"
                   value="{{ old('username') }}"
                   placeholder="Primer Nombre"
            >

            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Segundo Nombre</label>
            <input type="text" name="name" id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name') }}"
                   placeholder="Segundo Nombre"
            >

            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <input type="email" name="email" id="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email') }}"
                   placeholder="Correo Electronico"
            >

            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group input-group-flat">
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Contraseña"
                    autocomplete="off"
                    required
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" 
                    title="La contraseña debe tener al menos 8 caracteres, incluyendo una letra mayúscula, una minúscula, un número y un símbolo.">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <div class="input-group input-group-flat">
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Contraseña Confirmada"
                    autocomplete="off"
                    required
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" 
                    title="La contraseña debe tener al menos 8 caracteres, incluyendo una letra mayúscula, una minúscula, un número y un símbolo.">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="form-check">
                <input type="checkbox" name="terms-of-service" id="terms-of-service"
                       class="form-check-input @error('terms-of-service') is-invalid @enderror"
                >
                <span class="form-check-label">
                    Acepto <a href="{{ route('terms-of-service') }}" tabindex="-1">
                        Terminos y Politicas</a>.
                </span>
            </label>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">
                Crear una Nueva Cuenta
            </button>
        </div>
    </div>
</form>
<div class="text-center text-secondary mt-3">
    ¿Tienes una cuenta? <a href="{{ route('login') }}" tabindex="-1">
        Ingresa
    </a>
</div>
@endsection
