@extends('layouts.tabler')

@section('content')
    <div class="page-body">
        @if (!$categories)
            <x-empty title="No se encontraron categorías"
                message="Intenta ajustar tu búsqueda o filtro para encontrar lo que estás buscando."
                button_label="{{ __('Agregar tu primera Categoría') }}" button_route="{{ route('categories.create') }}" />
        @else
            
            <div class="container-xl">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <h3 class="mb-1">Éxito</h3>
                        <p>{{ session('success') }}</p>

                        <a class="btn-close" data-bs-dismiss="alert" aria-label="cerrar"></a>
                    </div>
                @endif
                @livewire('tables.category-table')
            </div>
        @endif
    </div>
@endsection

