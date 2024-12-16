<?php

namespace App\Livewire\Categoria;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Title;
//import de paginacion de la vista
use Livewire\withPagination;


#[Title('Categoria')]
class CategoriaComponente extends Component
{
    use withPagination;
    //Propiedades clase
    public $search='';
    public $totalRegistros=0;
    public $cant=5;

     //Propiedades clase
     public $name;

    public function render()
    {
        // if que valida y permite utilizar el buscador en todas las paguinas que se creen en paguinacion de categorias
        if($this->search!=''){
            $this->resetPage();
        }
        $this->totalRegistros = Category::count();
        //variable de las categorias, ordenando la paginacion y estableciendo una cantidad de 5
        $categories = category::where('name', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')
            ->paginate($this->cant);
        return view('livewire.categoria.categoriacomponente', [
            'categories' =>$categories
        ]);
    }

    //Mount cumple la funcion de un constructor
    public function mount(){
       
    }

    //metodo crear categoria
    public function store(){
        // dump('crear category');
        $rules = [
            'name' => 'required|min:5|max:255|unique:categories'
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener minimo 5 caracteres',
            'name.max' => 'El nombre no debe superar los 255 caracteres',
            'name.unique' => 'El nombre de la categoria ya existe'
        ];
        // aplicando validaciones y sus mensajes
        $this->validate($rules, $messages);

        //guardar categoria en la BDD
        $category = new Category();
        $category ->name = $this->name;
        $category -> save();

        //Cerrar modal tras click en "guardar"
        $this->dispatch('close-modal', 'modalCategory');
        // mensaje de exito para creacion de categoria
        $this->dispatch('msg', 'Categoria creada correctamente.');
        //resetar campos tras guardo exitoso
        $this->reset(['name']);
    }
    }
 
