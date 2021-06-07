<table>
    <thead>
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
    </tr>
    </thead>
    <tbody>
    @foreach($products as $p)
        <tr>
            <td>
                {{$p->id}}
            </td>
            <td>
                {{$p->name}} {{$p->brand->name}} {{$p->presentation->name}} {{$p->presentation->medida}}
            </td>
            <td>
                {{$p->category->name}}
            </td>
            <td>
                {{$p->price}}$
            </td>
            <td>
                {{$p->price*($p->category->margin+$p->brand->margin)/100+$p->price}}$
            </td>
            <td>
                {{number_format(round($p->category->tasa*($p->price*($p->category->margin+$p->brand->margin)/100+$p->price),2),2)}} Bs
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
