<?php

namespace App\Http\Livewire\Admin\Roles;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RolComponent extends Component
{
    /* Variables */

    public $search = '';
    public $entries = '5';
    public $sort = 'id';
    public $direcction = 'desc';
    public $name;
    public $permission_id = [];
    public $cont = 0;
    public $role_id;
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
        $permissions = Permission::all();

        $roles = Role::where('name', 'LIKE', "%{$this->search}%")
                        ->orderBy($this->sort, $this->direcction)
                        ->paginate($this->entries);

        return view('livewire.admin.roles.rol-component', compact('permissions', 'roles'));
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
        'name' => 'required|max:45|unique:roles',   
    ];
    
    protected $validationAttributes = [
        'name' => 'Rol'
    ];
    
    public function save(){
        
        $this->validate();
    
        $role = Role::create([
            'name' => $this->name,
        ]);
        
        while($this->cont < count($this->permission_id)){   
            $role->permissions()->sync($this->permission_id);
            $this->cont=$this->cont+1;
        }
    
        $this->reset(['name']);
        $this->reset(['permission_id']);
    
        $this->emit('render');
    
        $this->view = 'table';
    
        $this->emit('roleAdded');
    }
    /* End Create  */
    
    /* Edit/Update */
    
    public function edit($id)
    {
        $this->view = 'edit';
    
        $role = Role::find($id);
        $this->role_id = $id;
        $this->name = $role->name;
        $this->permission_id = $role->permissions[0]->id;
    
    }
    
    public function update()
    {
        $this->validate([
            'name' => "required|unique:roles,name,$this->role_id",  
        ]);
    
        $role = Role::find($this->role_id);
    
        $role->update([
            'name' => $this->name
        ]);

        $role->permissions()->sync($this->permissions);
        
        $this->reset(['name']);
        $this->reset(['permissions']);
        $this->view = 'table';
        $this->emit('roleEdited');
        
    }
    /* End Edit/Update */
    
    /* Destroy */
    
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
    
        try {
            $role->delete();
            $this->emit('roleDeleted');
            
        } catch (\Exception $e) {
    
            $this->emit('roleDeleted_e');
        }
    
    }
    /* End Destroy */
}
