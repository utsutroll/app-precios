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
                Detalles del Producto
            </h2>

        </div>
            <div class="px-3">
                <div class="mb-4 flex items-center">
                    <label for="" class="flex-1 text-base font-bold">Producto</label>
                    <span class="flex-1 text-base">{{$name}}</span>   
                </div>

                <div class="mb-4 flex items-center">
                    <label for="" class="flex-1 text-base font-bold">Marca</label>
                    <span class="flex-1 text-base">{{$brand_id}}</span>   
                </div>

                <div class="mt-4 flex items-center">
                    <label for="" class="flex-1 text-base font-bold">Categoría</label>
                    <span class="flex-1 text-base">{{$category_id}}</span>    
                </div>

                <div class="mt-4 flex items-center">
                    <label for="" class="flex-1 text-base font-bold">Presentación</label>
                    <span class="flex-1 text-base">{{$presentation_id}}</span>   
                </div>

                <div class="mt-4 flex items-center">
                    <label for="" class="flex-1 text-base font-bold">Unidades</label>
                     <span class="flex-1 text-base">{{$unit}}</span>  
                </div>

                <div class="mt-4 flex items-center">
                    <label for="" class="flex-1 text-base font-bold">Precio</label>
                     <span class="flex-1 text-base">{{$price}} Bs</span>  
                </div>

            </div>
            <div class="flex justify-self-start">
                <div class="flex-1">
                    <button wire:click="$set('view', 'table')" type="button" class="group w-full justify-center py-3 border border-transparent text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        
                        </span>
                        Volver
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>  