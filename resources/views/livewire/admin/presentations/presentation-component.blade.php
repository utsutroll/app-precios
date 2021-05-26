<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-4 lg:px-6 flex">
            <p class="text-xl font-bold text-gray-900 flex-1 justify-self-start">
                Presentaciones
            </p>
            @if($view == "table")
            <div class="justify-self-end">
                <button wire:click="$set('view', 'create')" type="button" class="text-base text-white hover:text-gray-800 rounded-md p-2 bg-green-500 hover:bg-green-600">
                    Nueva Presentación
                </button>
            </div>
            @endif
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @if($view == "table")
                @include("livewire.admin.presentations.table")
            @elseif ($view == "create")
                @include('livewire.admin.presentations.create')
            @else
                @include('livewire.admin.presentations.edit')
            @endif
        </div>
    </main>
</div>
