<?php

namespace App\Livewire\Categoria;

use Livewire\Component;
use App\Models\Category;
use Livewire\Attributes\Title;


#[Title('Categoria')]
class CategoriaComponente extends Component
{
    //Propiedades clase
    public $totalRegistros=0;

     //Propiedades clase
     public $name;

    public function render()
    {
        $this->totalRegistros = Category::count();
        return view('livewire.categoria.categoriacomponente');
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
 
