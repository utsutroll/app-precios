<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class MarginCategory extends Component
{
    public $search ='';
    public $tasa;
    public $margin;
    
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

        $categories = Category::where('name', 'LIKE', "%{$this->search}%")
                            ->paginate(5);

        return view('livewire.admin.categories.margin-category', compact('categories'));
    }

    public function clear(){

        $this->search = '';
        $this->page = 1;

    }

    public function update($id)
    {
        $category = Category::find($id);

        $this->validate([
            'margin' => "required",  
            'tasa' => "required",  
        ]);

        $category->update([
            'margin' => $this->margin,
            'tasa' => $this->tasa

        ]);

        $this->reset(['margin']);
        $this->reset(['tasa']);

    }
}
