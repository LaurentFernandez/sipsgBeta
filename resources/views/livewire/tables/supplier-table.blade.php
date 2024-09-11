<div class="card">
    <div class="card-header">
        <div>
            <h3 class="card-title">
                {{ __('Proveedores') }}
            </h3>
        </div>

        <div class="card-actions">
            <x-action.create route="{{ route('suppliers.create') }}" />
        </div>
    </div>

    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-secondary">
                Mostrar
                <div class="mx-2 d-inline-block">
                    <select wire:model.live="perPage" class="form-select form-select-sm" aria-label="resultados por página">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="25">25</option>
                    </select>
                </div>
                entradas
            </div>
            <div class="ms-auto text-secondary">
                Buscar:
                <div class="ms-2 d-inline-block">
                    <input type="text" wire:model.live="search" class="form-control form-control-sm" aria-label="Buscar proveedor">
                </div>
            </div>
        </div>
    </div>

    <x-spinner.loading-spinner/>

    <div class="table-responsive">
        <table wire:loading.remove class="table table-bordered card-table table-vcenter text-nowrap datatable">
            <thead class="thead-light">
            <tr>
                <th class="align-middle text-center w-1">
                    {{ __('ID.') }}
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('name')" href="#" role="button">
                        {{ __('Nombre') }}
                        @include('inclues._sort-icon', ['field' => 'name'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('email')" href="#" role="button">
                        {{ __('Dirección de correo electrónico') }}
                        @include('inclues._sort-icon', ['field' => 'email'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('shopname')" href="#" role="button">
                        {{ __('Nombre de la tienda') }}
                        @include('inclues._sort-icon', ['field' => 'shopname'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('type')" href="#" role="button">
                        {{ __('Tipo') }}
                        @include('inclues._sort-icon', ['field' => 'type'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    <a wire:click.prevent="sortBy('created_at')" href="#" role="button">
                        {{ __('Creado en') }}
                        @include('inclues._sort-icon', ['field' => 'created_at'])
                    </a>
                </th>
                <th scope="col" class="align-middle text-center">
                    {{ __('Acción') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @forelse ($suppliers as $supplier)
                <tr>
                    <td class="align-middle text-center">
                        {{ $loop->index }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $supplier->name }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $supplier->email }}
                    </td>
                    <td class="align-middle text-center">
                        {{ $supplier->shopname }}
                    </td>
                    <td class="align-middle text-center">
                        <span class="badge bg-primary text-white text-uppercase">
                            {{ $supplier->type }}
                        </span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="">
                            {{ $supplier->created_at->diffForHumans() }}
                        </span>
                    </td>
                    <td class="align-middle text-center">
                        <x-button.show class="btn-icon" route="{{ route('suppliers.show', $supplier->uuid) }}"/>
                        <x-button.edit class="btn-icon" route="{{ route('suppliers.edit', $supplier->uuid) }}"/>
                        <x-button.delete 
                            class="btn-icon" 
                            route="{{ route('suppliers.destroy', $supplier->uuid) }}" 
                            onclick="return confirm('¿Está seguro de eliminar al proveedor {{ $supplier->name }}?')"
                        />
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="align-middle text-center" colspan="8">
                        No se encontraron resultados
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div class="card-footer d-flex align-items-center">
        <p class="m-0 text-secondary">
            Mostrando <span>{{ $suppliers->firstItem() }}</span> a <span>{{ $suppliers->lastItem() }}</span> de <span>{{ $suppliers->total() }}</span> entradas
        </p>

        <ul class="pagination m-0 ms-auto">
            {{ $suppliers->links() }}
        </ul>
    </div>
</div>
