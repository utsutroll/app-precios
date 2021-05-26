<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsComponent extends Component
{
    /* Variables */

    public $search = '';
    public $entries = '5';
    public $sort = 'id';
    public $direcction = 'desc';

    /* End Variables */

    /* Table */

    use WithPagination;

    protected $paginationTheme = "tailwind";

    public function updatingSearch(){
            $this->resetPage();
    }

    protected $queryString = [
        'search' => ['except' => ''],
        'entries' => ['except' => '5']
    ];


    protected $listeners = ['render', 'render'];

    public function render()
    {
        $products = Product::where('name', 'LIKE', "%{$this->search}%")
                            ->orderBy($this->sort, $this->direcction)
                            ->paginate($this->entries);

        return view('livewire.products-component', compact('products'));
    }
}
