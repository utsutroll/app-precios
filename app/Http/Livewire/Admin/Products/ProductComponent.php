<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Presentation;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class ProductComponent extends Component
{
    /* Variables */

    public $search = '';
    public $entries = '5';
    public $sort = 'id';
    public $direcction = 'desc';
    public $name;
    public $product_id;
    public $category_id;
    public $brand_id;
    public $presentation_id;
    public $unit;
    public $price;
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


    protected $listeners = ['render', 'render'];

    public function render()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $presentations = Presentation::all();
        $products = Product::where('name', 'LIKE', "%{$this->search}%")
                            ->orderBy($this->sort, $this->direcction)
                            ->paginate($this->entries);
        
        return view('livewire.admin.products.product-component', compact('products', 'brands', 'categories', 'presentations'));
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
        $this->reset(['category_id']);
        $this->reset(['brand_id']);
        $this->reset(['presentation_id']);
        $this->reset(['unit']);
        $this->reset(['price']);
    }

    protected $rules = [
        'name' => 'required|max:150|unique:products,name',   
        'category_id' => 'required',    
        'brand_id' => 'required',    
        'presentation_id' => 'required',    
        'unit' => 'required'   
    ];

    protected $validationAttributes = [
        'name' => 'Producto',
        'category_id' => 'Categoría',
        'brand_id' => 'Marca',
        'presentation_id' => 'Presentación',
        'unit' => 'Unidades'
    ];

    public function save(){
        
        $this->validate();

        Product::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'presentation_id' => $this->presentation_id,
            'unit' => $this->unit,
            'price' => $this->price,
            'slug' => Str::slug($this->name .'-'. $this->presentation_id)
        ]);

        $this->reset(['name']);
        $this->reset(['category_id']);
        $this->reset(['brand_id']);
        $this->reset(['presentation_id']);
        $this->reset(['unit']);
        $this->reset(['price']);

        $this->view = "table";

        $this->emit('render');

        $this->emit('productAdded');
    }
    /* End Create  */

    /* Edit/Update */

    public function edit($id)
    {
        $this->view = "edit";

        $product = Product::find($id);

        $this->product_id = $id;
        $this->name = $product->name;
        $this->category_id = $product->category_id;
        $this->brand_id = $product->brand_id;
        $this->presentation_id = $product->presentation_id;
        $this->unit = $product->unit;
        $this->price = $product->price;
  
    }

    public function update()
    {
        $this->validate([
            'name' => "required|max:150|unique:products,name,$this->product_id",  
            'category_id' => 'required',    
            'brand_id' => 'required',    
            'presentation_id' => 'required',    
            'unit' => 'required' 
        ]);

        $product = Product::find($this->product_id);

        $product->update([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'presentation_id' => $this->presentation_id,
            'unit' => $this->unit,
            'price' => $this->price,
            'slug' => Str::slug($this->name .'-'. $this->presentation_id)
        ]);
        
        $this->reset(['name']);
        $this->reset(['category_id']);
        $this->reset(['brand_id']);
        $this->reset(['presentation_id']);
        $this->reset(['unit']);
        $this->reset(['price']);
        $this->view = "table";
        $this->emit('productEdited');
        
    }
    /* End Edit/Update */
    
    /* Show */

    public function show($id)
    {
        $this->view = "show";

        $product = Product::find($id);

        $this->name = $product->name;
        $this->category_id = $product->category->name;
        $this->brand_id = $product->brand->name;
        $this->presentation_id = $product->presentation->name .''.$product->presentation->medida;
        $this->unit = $product->unit;
        $this->price = $product->price;
  
    }

    /* End Show */

    /* Destroy */

    public function destroy($id)
    {
        $presentation = Presentation::findOrFail($id);

        try {
            $presentation->delete();
            $this->emit('productDeleted');
            
        } catch (\Exception $e) {

            $this->emit('productDeleted_e');
        }
    }
    /* End Destroy */
}
