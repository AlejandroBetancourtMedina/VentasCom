<div>
   <!-- invocando atributos de card.blade.php -->
    <x-card cardTitle="Listado Categoria ({{$this->totalRegistros}})"  >
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCategory">Crear Categoria</a>
        </x-slot:cardTools>
   
        <x-table>
            <x-slot:thead>
                <th>ID</th>
                <th>Nombre</th>
                <th width="3%">...</th>
                <th width="3%">...</th>
                <th width="3%">...</th>

            </x-slot:thead>

            @forelse($categories as $category)

                <tr>
                    <!-- Consumiendo las variables con si identificacion para que se muestren en la interfaz -->
                    <td>{{$category->id}}</td> 
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="#" class= "btn btn-success btn-xs" title="Ver">
                            <i class="far fa-eye"></i>
                        </a>
                    </td>

                    <th>
                    <a href="#" class="btn btn-primary btn-xs" title="Editar">
                        <i class="far fa-edit"></i>
                    </a>
                    </th>

                    <th>
                    <a href="#" class="btn btn-danger btn-xs" title="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                    </th>
                   

                </tr>
            @empty

            <tr>
                <td colspan="5">Sin Registros</td>
            </tr>
            @endforelse
            
        </x-table>
        <x-slot:cardFooter>
            {{$categories->links()}}
        </x-slot:cardFooter>
    </x-card>

    <x-modal modalId="modalCategory" modalTitle="Categorias">
    
    <!-- Formulario de Crear Categoria -->
    <form wire:submit="store">
        <div class="form-row">
            <div class="form-group col-12">
                <label for="name">Nombre:</label>
               
                <input wire:model='name' type="text" class="form-control" placeholder="Nombre Categoria" id="name">
                @error('name')
                    <div class="alert alert-danger w-100 mt-2"> {{$message}}</div>
                @enderror            
                </div>
        </div>
        <br/>
        <button class="btn btn-primary float-right">Guardar</button>
    </form>
    
    </x-modal>
</div>
