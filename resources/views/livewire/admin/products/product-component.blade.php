<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-4 lg:px-6 flex">
            <p class="text-xl font-bold text-gray-900 flex-1 justify-self-start">
                Productos
            </p>
            @if($view == "table")
            <div class="justify-self-end">
                <button wire:click="$set('view', 'create')" type="button" class="text-base text-white hover:text-gray-800 rounded-md p-2 bg-green-500 hover:bg-green-600">
                    Nuevo Producto
                </button>
            </div>
            @endif
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @if($view == "table")
                @include("livewire.admin.products.table")
            @elseif ($view == "create")
                @include('livewire.admin.products.create')
            @elseif ($view == "edit")
                @include('livewire.admin.products.edit')
            @else
                @include('livewire.admin.products.show')
            @endif
        </div>
    </main>
</div>
