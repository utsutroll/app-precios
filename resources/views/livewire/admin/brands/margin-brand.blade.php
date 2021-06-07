<div>
    <div wire:loading>
        <div id="loader-wrapper" class="la-ball-clip-rotate-pulse la-dark la-2x">
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-4 lg:px-6 flex">
            <p class="text-sm md:text-lg lg:text-xl font-bold text-gray-900 flex-1 justify-self-start">
                Actualizar Margen de Ganancia Según la Marca
            </p>
            <div class="justify-self-end">
                <a  href="{{route('admin.brands.index')}}" class="text-base text-white hover:text-gray-800 rounded-md p-2 bg-green-500 hover:bg-green-600">
                    Nueva Marca
                </a>
            </div>
        </div>
    </header>

    <div wire:loading.remove class="flex items-center my-4 mx-2 md:mx-4 lg:mx-4 justify-center">
        <div class="max-w-lg w-full space-y-8 shadow-md bg-white p-2 md:p-4 lg:p-4 rounded-md">
            <div>
                <h2 class="mt-2 text-center text-base font-extrabold text-gray-900">
                    Actualizar Margen de Ganancia
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
                @if(count($brands) > 0)

                @error('margin')
                <div class="bg-red-100 border mb-2 border-red-400 flex text-red-700 px-4 py-3 rounded relative" role="alert">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(194, 7, 7, 1);transform:;-ms-filter:">
                        <path d="M11.001 10H13.001V15H11.001zM11 16H13V18H11z"></path><path d="M13.768,4.2C13.42,3.545,12.742,3.138,12,3.138s-1.42,0.407-1.768,1.063L2.894,18.064 c-0.331,0.626-0.311,1.361,0.054,1.968C3.313,20.638,3.953,21,4.661,21h14.678c0.708,0,1.349-0.362,1.714-0.968 c0.364-0.606,0.385-1.342,0.054-1.968L13.768,4.2z M4.661,19L12,5.137L19.344,19H4.661z"></path>
                    </svg>
                    <span class="block sm:inline">{{$message}}.</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                  </div>
                @enderror

                <script>
                    var alert_del = document.querySelectorAll('.alert-del');
                    alert_del.forEach((x) =>
                        x.addEventListener('click', function () {
                        x.parentElement.classList.add('hidden');
                        })
                    );
                </script>
                @foreach($brands as $b)
                <dl>
                  <div class="bg-gray-50 px-3 py-5 grid md:grid-cols-3 lg:grid-cols-3 md:gap-2 lg:gap-2 border-b border-gray-200">
                    <dt class="text-sm font-medium pr-6 text-gray-500 items-center">
                        <div>
                            <p class="text-base mb-3"><strong>Marca:</strong> {{$b->name}}</p>
                        </div>             
                        <div>                                       
                            <p class="text-base mb-3"><strong>Margen Actual:</strong> {{$b->margin}}%</p>
                        </div>
                    </dt>
                    <dd class="text-sm text-gray-900 sm:mt-0 sm:col-span-2 md:flex lg:flex items-center">
                        <div class="flex-3">
                            <div class="mb-3">
                                <label class="ml-3">Actualizar Margen</label>
                                <input type="number" min="1" wire:model.defer="margin" class="appearance-none rounded-0 block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-full focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                            </div>
                        </div>
                        <div class="flex md:flex-1 lg:flex-1 ml-3 mt-2 justify-end">
                            <button wire:click.prevent="update({{$b->id}})" wire:loading.disabled wire:target="update"  class="group w-sm md:w-full lg:w-full justify-center p-2 md:p-3 lg:p-3 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">Actualizar</button>
                        </div> 
                    </dd>
                    
                  </div>
                </dl>
                @endforeach
                <div class="float-right">
                    {{$brands->onEachSide(5)->links()}}
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
