<div>
    <div wire:loading wire:target="update" class="w-full h-full">
        <div id="loader-wrapper" class="la-ball-clip-rotate-pulse la-dark la-2x">
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-4 lg:px-6 flex">
            <p class="text-sm md:text-lg lg:text-xl font-bold text-gray-900 flex-1 justify-self-start">
                Actualizar Margen de Ganancia Según la Categoría
            </p>
            <div class="justify-self-end">
                <a  href="{{route('admin.categories.index')}}" class="text-base text-white hover:text-gray-800 rounded-md p-2 bg-green-500 hover:bg-green-600">
                    Nueva Categoría
                </a>
            </div>
        </div>
    </header>

    <div class="flex items-center my-4 mx-2 md:mx-4 lg:mx-4 justify-center">
        <div class="max-w-lg w-full space-y-8 shadow-md bg-white p-2 md:p-4 lg:p-4 rounded-md">
            <div>
                <h2 class="mt-2 text-center text-base font-extrabold text-gray-900">
                    Actualizar Margen de Ganancia y Tasa del Dolar
                </h2>
            </div>
            <div class="flex items-center my-2 mx-3">
                <label>Buscar:
                    <input type="search" wire:model="search" class="border-b border-r-0 border-t-0 border-l-0 focus:ring-2 focus:ring-white" placeholder="">
                    @if ($search !== '')
                    <button class="btn btn-outline-secondary btn-sm waves-effect waves-light" wire:click="clear" type="button"><span class="btn-label"><i class="fa fa-times"></i></span></button>    
                    @endif
                        
                </label>
            </div>

            <div class="border-t border-gray-200">
                @if(count($categories) > 0)

                @error('price')
                <div class="alert alert-danger"> <i class="ti-alert"></i> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                </div> 
                @enderror

                @foreach($categories as $c)
                <dl>
                  <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 flex">
                    <dt class="text-sm font-medium text-gray-500 flex-2 items-center">
                        <div>
                            <p class="font-bold mt-3">Categoría: {{$c->name}}</p>
                        </div> <br/>              
                        <div>                                       
                            <p class="font-bold mt-3">Margen Actual: {{$c->margin}}%</p>
                        </div>
                    </dt>
                    <dd class="mt-1 ml-2 text-sm text-gray-900 sm:mt-0 sm:col-span-2 flex items-center">
                        <div class="flex-2">
                            <label class="ml-3">Actualizar Margen</label>
                            <input type="number" min="1" wire:model.defer="margin" class="appearance-none rounded-0 relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                        </div>
                        <div class="flex mt-4 ml-2">
                            <button wire:click.prevent="update({{$c->id}})" wire:loading.disabled wire:target="update"  class="group w-sm md:w-full lg:w-full justify-center py-2 md:py-3 lg:py-3 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">Actualizar</button>
                        </div>    

                    </dd>
                  </div>
                </dl>
                @endforeach
                <div class="float-right">
                    {{$categories->onEachSide(5)->links()}}
                </div>
                @elseif($search !== '')
                <div class="border-t border-gray-200">
                    <div class="mt-4 flex items-center">
                        <span class="text-blase font-bold text-center">No hay resultados para la busqueda: "{{$search}}"</span>
                    </div>
                </div>
                @endif
           </div> 
        </div> 
    </div> 
</div>
