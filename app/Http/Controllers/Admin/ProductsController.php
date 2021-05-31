<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.products.index');
    }

    public function products()
    {
        return view('products-price');
    }
    
    public function exportPdf()
    {
        $products = Product::all();
        
        $pdf = PDF::loadView('exports.products-prices', compact('products'))->setPaper('a4', 'landscape');

        return $pdf->donwload('Lisdado-Precio-de-Productos.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new ProductsExport, 'precio-de-productos.xlsx');
    }

}
