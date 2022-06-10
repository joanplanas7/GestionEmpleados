<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithPagination;

class EmpleadoIndex extends Component
{
    use WithPagination;
    
    public $busqueda = '';
    public $pag = 10;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $emplados = $this->consulta();
       
        $params = [
            'empleados' => $emplados->paginate($this->pag),
        ];
        
       
        return view('livewire.empleado-index', $params);
    }

    public function consulta(){
        $query = Empleado::orderByDesc('id');

        if($this->busqueda != ''){
            $query = $query->where('name', 'LIKE', '%'.$this->busqueda.'%');
        }

        return $query;
    }
}
