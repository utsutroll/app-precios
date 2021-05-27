<?php

namespace App\Http\Livewire\Admin\Brands;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class MarginBrand extends Component
{
    public $brand;
    public $search ='';
    public $margin;
    public $brand_id;
    
    use WithPagination;

    protected $paginationTheme = "tailwind";

    public function updatingSearch(){
            $this->resetPage();
    }

    protected $queryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $brands = Brand::where('name', 'LIKE', "%{$this->search}%")
                            ->paginate(5);

        return view('livewire.admin.brands.margin-brand', compact('brands'));
    }

    public function clear(){

        $this->search = '';
        $this->page = 1;

    }

    public function update($id)
    {
        $brands = Brand::find($id);

        $this->validate([
            'margin' => "required",  
        ]);

        $brands->update(['margin' => $this->margin]);

        $this->reset(['margin']);

    }
}
