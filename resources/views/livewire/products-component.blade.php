<div>
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-4 lg:px-6 flex">
            <p class="text-xl font-bold text-gray-900 flex-1 justify-self-start">
               Precios de Productos
            </p>
            
            <div class="justify-self-end">
                <a  href="{{route('admin.products.index')}}" class="text-base text-white hover:text-gray-800 rounded-md p-2 bg-green-500 hover:bg-green-600">
                    Nuevo Producto
                </a>
            </div>

        </div>
    </header>
    <div class="container mx-auto max-w-6xl my-6 px-4 flex flex-col">
        <div class="my-4 shadow-md overflow-x-auto mx-4 sm:-mx-6 lg:-mx-8">
            <div class="py-2 bg-white rounded-md shadow-lg align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <p class="text-xl font-bold my-3 mx-3 text-gray-900 flex-1 justify-self-start">
                    Listado de Productos
                </p>
    
                <div class="flex my-2 mx-3">
                    <div class="flex-1 items-center">
                        <label>Mostrar 
                            <select wire:model="entries"  class="border-b border-r-0 border-t-0 border-l-0 focus:ring-2 focus:ring-white">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> 
                        Entradas</label>
                    </div>
                    <div class="flex-1 items-center">
                        <label>Buscar:
                            <input type="search" wire:model="search" class="border-b border-r-0 border-t-0 border-l-0 focus:ring-2 focus:ring-white" placeholder="">
                            @if ($search !== '')
                            <button class="btn btn-outline-secondary btn-sm waves-effect waves-light" wire:click="clear" type="button"><span class="btn-label"><i class="fa fa-times"></i></span></button>    
                            @endif
                            
                        </label>
                    </div>
                    <div class="flex-2 justify-self-end">
                        <span class="text-base font-bold mr-2 hover:text-blue-800">
                            <a href="#">PDF</a>
                        </span>
                        <span class="text-base font-bold hover:text-blue-800">
                            <a href="#">EXCEL</a>
                        </span>
                    </div>
                </div>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        @if (count($products) > 0)
                        <thead class="bg-gray-50">
                            <tr>
                                <th wire:click="order('id')" style="cursor:pointer;" scope="col" class="w-24 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th wire:click="order('name')" style="cursor:pointer;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Producto
                                </th>
                                <th wire:click="order('category_id')" style="cursor:pointer;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoría
                                </th>
                                <th wire:click="order('price')" style="cursor:pointer;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Precio Costo $
                                </th>
                                <th wire:click="order('price')" style="cursor:pointer;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Precio Venta $
                                </th>
                                <th wire:click="order('price')" style="cursor:pointer;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Precio Venta Bs
                                </th>
                                <th scope="col" colspan="3" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($products as $p)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$p->id}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$p->name}} {{$p->brand->name}} {{$p->presentation->name}} {{$p->presentation->medida}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$p->category->name}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$p->price}}$</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$p->price*($p->category->margin+$p->brand->margin)/100+$p->price}}$</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{number_format(round($p->category->tasa*($p->price*($p->category->margin+$p->brand->margin)/100+$p->price),2),2)}} Bs</div>
                                </td>
                                {{-- <td width="10px" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-indigo-600 hover:text-indigo-900"
                                            wire:click="edit({{$p->id}})"
                                    >
                                        Editar
                                    </button>
                                </td>--}}
                                <td width="10px" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-indigo-600 hover:text-indigo-900"
                                            wire:click="show({{$p->id}})"
                                    >
                                        Ver
                                    </button>
                                </td>
                                {{-- <td width="10px" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-indigo-600 hover:text-indigo-900"
                                            wire:click="destroy({{$p->id}})"
                                    >
                                        Eliminar
                                    </button>
                                </td> --}} 
                            </tr>
    
                            @endforeach
                        </tbody>    
                        @elseif (count($products) == 0 & $search !== '')
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Producto
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoría
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Precio
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td colspan="5" class="p-4">No hay un resultado para la busqueda "{{$search}}" </td>
                            </tr>     
                        </tbody>    
                        @else
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Producto
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Marca
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoría
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td colspan="5" class="p-4">No se Encontraron Registros</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="bg-white px-4 py-3 justify-self-end sm:px-6">
                    
                    {{$products->links()}}
    
                </div>
            </div>
        </div>
    </div>
</div>
