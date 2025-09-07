<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">     

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
                    <table id="inventario" class="display w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">REFERENCIA</th>
                                <th scope="col" class="px-6 py-3">CATEGORIA</th>
                                <th scope="col" class="px-6 py-3">COLOR</th>
                                <th scope="col" class="px-6 py-3">CANTIDAD</th>
                                <th scope="col" class="px-6 py-3">ESTADO</th>
                                <th scope="col" class="px-6 py-3">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inventario as $item)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4">{{ $item->Referencia_producto }}</td>
                                    <td class="px-6 py-4">{{ $item->Categoria_producto }}</td>
                                    <td class="px-6 py-4">{{ $item->Color_producto }}</td>
                                    <td class="px-6 py-4">{{ $item->Cantidad_producto }}</td>
                                    <td class="px-6 py-4">{{ $item->Estado_producto }}</td>
                                    <td class="flex items-center px-6 py-4 gap-2">
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-md py-2 px-4">Editar</a>
                                        <a href="#" class="bg-red-600 hover:bg-red-700 text-white font-bold rounded-md py-2 px-4">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    {{-- jQuery + DataTables + Buttons --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <script>
        $(function() {
            $('#inventario').DataTable({
                pageLength: 10, // cantidad de registros por página
                dom: 'Bfrtip',  // botones arriba con filtro
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        });
    </script>
</x-app-layout>
