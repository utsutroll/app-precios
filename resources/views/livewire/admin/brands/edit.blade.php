<div x-transition:enter="transition ease-out duration-300"
x-transition:enter-start="opacity-0 translate-y-1"
x-transition:enter-end="opacity-0 translate-y-0"
x-transition:leave="transition ease-in duration-350"
x-transition:leave-start="opacity-100 translate-y-0"
x-transition:leave-end="opacity-0 translate-y-1"

>   
<div class="flex items-center mt-4 justify-center">
    <div class="max-w-md w-full space-y-8 shadow-md bg-white p-4 rounded-md">
        <div>
            <h2 class="mt-6 text-center text-base font-extrabold text-gray-900">
                Editar Marca
            </h2>

        </div>
            <div class="-space-y-px">
                <div class="mb-4">
                    <label for="" class="sr-only">Marca</label>
                    <input wire:model.defer="name" type="text" class="appearance-none rounded-0 relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ingrese la Marca del Producto">
                
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <small class="text-md text-red-600">{{ $message }}</small>
                        </span>
                    @enderror    
                </div>

                <div class="mb-4">
                    <label for="" class="sr-only">Margen de Ganancia</label>
                    <input wire:model.defer="margin" type="number" min="1" class="appearance-none rounded-0 relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Ingrese el Margen de Ganancia (Opcional)">   
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex-1 mr-2">
                    <button wire:click="$set('view', 'table')" type="button" class="group w-full justify-center py-3 border border-transparent text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        
                        </span>
                        Cancelar
                    </button>
                </div>

                <div class="flex-1">
                    <button wire:click.prevent="update()" class="group w-full justify-center py-3 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        
                        </span>
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
