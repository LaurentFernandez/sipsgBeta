@extends('layouts.tabler')

@section('content')
<div class="page-body">
    @if(!$purchases)
    <x-empty
        title="No se encontraron compras"
        message="Intenta ajustar tu búsqueda o filtro para encontrar lo que estás buscando."
        button_label="{{ __('Añadir tu primera Compra') }}"
        button_route="{{ route('purchases.create') }}"
    />
    @else
    <div class="container-xl">
        @livewire('tables.purchase-table')
    @endif
</div>
@endsection
