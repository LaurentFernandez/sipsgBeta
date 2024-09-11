@extends('layouts.tabler')

@section('content')
<div class="page-body">
    @if($units->isEmpty())
        <x-empty
            title="No se encontraron unidades"
            message="Intenta ajustar tu búsqueda o filtro para encontrar lo que estás buscando."
            button_label="{{ __('Añadir tu primera Unidad') }}"
            button_route="{{ route('units.create') }}"
        />
    @else
        <div class="container-xl">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <h3 class="mb-1">Éxito</h3>
                    <p>{{ session('success') }}</p>

                    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif
            @livewire('tables.unit-table')
        </div>
    @endif
</div>
@endsection
