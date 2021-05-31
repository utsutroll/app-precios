<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
<style>
    * {
      margin: 0.5rem 1rem;
      font-family: sans-serif;
    }
    table {
      margin: auto;
      width: 100%;
      border-collapse: collapse;
    }
    thead {
      background-color: rgba(241, 241, 241, 0.527);
      width: 100%;
    }
    th {
      border-bottom: inset #e5e7eb;
      border-width: 2px;
      width: 100%;  
      padding-top: 15px;
      padding-bottom: 15px;
    }
    tr {
      border-bottom: inset rgba(0, 0, 0, 0.253);
      border-width: 1px;
      width: 100%;
    }
    tr:nth-child(even) {
      background-color: #f5f5f5;
    }
    td {
      white-space: nowrap;
      text-align: center;
      padding-top: 12px;
      padding-bottom: 12px;
      width: 100%;
    }
    div{
      border-radius:10px;
      border: 1px solid #e5e7eb;
      padding-bottom: 25px;
    }
    .image{
      margin: auto;
      width: 20%;
      height: 10%;
      border: none;
    }
    .image img{
      width: 100%;
      margin: 0;
    }
    .title{
      margin: 5px;
      width: 25%;
      padding: 0;
      text-align: center;
      border: 0;
      width: 100%;
    }
  </style>

</head>
<body>
  <div class="image">
    <img src="{{ asset('img/logo-text-dark.svg')}}">
  </div>
  <div class="title">
    <h4>Listado Precio de Productos</h4>
  </div>
<div>
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
</div>
</body>