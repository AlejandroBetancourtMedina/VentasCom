<?php

namespace App\Livewire\Categoria;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Categoria')]
class CategoriaComponente extends Component
{
    public function render()
    {
        return view('livewire.categoria.categoriacomponente');
    }
}
