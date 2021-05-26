<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class CategoryComponent extends Component
{
    /* Variables */

    public $search = '';
    public $entries = '5';
    public $sort = 'id';
    public $direcction = 'desc';
    public $name;
    public $margin;
    public $tasa;
    public $category_id;
    public $view = 'table';
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
 

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $categories = Category::where('name', 'LIKE', "%{$this->search}%")
                                ->orderBy($this->sort, $this->direcction)
                                ->paginate($this->entries);

        return view('livewire.admin.categories.category-component', compact('categories'));
    }


    public function order($sort){

        if ($this->sort == $sort) {
            
            if ($this->direcction == 'desc') {
                $this->direcction = 'asc';
            }else{
                $this->direcction = 'desc';
            }
        }else{
            $this->sort = $sort;
            $this->direcction = 'asc';
        }
        
    }
    public function clear(){

        $this->search = '';
        $this->page = 1;
        $this->entries = '5';

    }
    /* End Table */


    /* Create */
    public function create()
    {
        $this->reset(['name']);
    }

    protected $rules = [
        'name' => 'required|max:45|unique:categories',   
    ];

    protected $validationAttributes = [
        'name' => 'Categoría'
    ];

    public function save(){
        
        $this->validate();

        Category::create([
            'name' => $this->name,
            'margin' => $this->margin,
            'tasa' => $this->tasa,
            'slug' => Str::slug($this->name)
        ]);

        $this->reset(['name']);
        $this->reset(['margin']);
        $this->reset(['tasa']);

        $this->emit('render');

        $this->view = 'table';

        $this->emit('categoryAdded');
    }
    /* End Create  */

    /* Edit/Update */

    public function edit($id)
    {
        $this->view = 'edit';

        $category = Category::find($id);

        $this->category_id = $id;
        $this->name = $category->name;
        $this->margin = $category->margin;
        $this->tasa = $category->tasa;
  
    }

    public function update()
    {
        $this->validate([
            'name' => "required|unique:categories,name,$this->category_id",  
        ]);

        $category = Category::find($this->category_id);

        $category->update([
            'name' => $this->name,
            'margin' => $this->margin,
            'tasa' => $this->tasa,
            'slug' => Str::slug($this->name)
        ]);
        
        $this->reset(['name']);
        $this->reset(['margin']);
        $this->reset(['tasa']);
        $this->view = 'table';
        $this->emit('categoryEdited');
        
    }
    /* End Edit/Update */

    /* Destroy */

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        try {
            $category->delete();
            $this->emit('categoryDeleted');
            
        } catch (\Exception $e) {

            $this->emit('categoryDeleted_e');
        }

    }
    /* End Destroy */

}
