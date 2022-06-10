<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;
use Livewire\WithPagination;

class EmpleadoIndex extends Component
{
    use WithPagination;
    
    public $busqueda = '';
    public $pag = 1;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $emplados = $this->consulta();
        $emplados = $emplados->paginate($this->pag);
        
        if($emplados->currentPage() > $emplados->lastPage() ){
            $this->resetPage();
            $emplados = $this->consulta();
            $emplados->paginate($this->pag);
        }

        $params = [
            'empleados' => $emplados, 
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
