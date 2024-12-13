<div>
   <h1>Componente Inicio<h1>

   <!-- invocando atributos de card.blade.php -->
    <x-card cardTitle="Card title"  cardFooter='card footer'>
        <x-slot:cardTools>
            <a href="#" class="btn btn-primary">Crear</a>
        </x-slot:cardTools>
        <x-table>
            <x-slot:thead>
                <th>Hola</th>
                <th>Hola</th>

            </x-slot:thead>

                <tr>
                    <td>...</td>
                    <td>...</td>
                </tr>
            
        </x-table>
    </x-card>
</div>
