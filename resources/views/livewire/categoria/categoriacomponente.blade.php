<div>
   <!-- invocando atributos de card.blade.php -->
    <x-card cardTitle="Listado Categoria"  cardFooter=''>
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="modalCategory">Crear Categoria</a>
        </x-slot:cardTools>
        <x-table>
            <x-slot:thead>
                <th>ID</th>
                <th>Nombre</th>
                <th width="3%">...</th>
                <th width="3%">...</th>
                <th width="3%">...</th>

            </x-slot:thead>

                <tr>
                    <td>...</td>
                    <td>...</td>
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
            
        </x-table>
    </x-card>

    <x-modal modalId="modalCategory" modalTitle="Categorias">
    
    <form>
        <p>Formulario</p>
        <button type="button" class="btn btn-primary">Save changes</button>
    </form>
    
    </x-modal>
</div>
