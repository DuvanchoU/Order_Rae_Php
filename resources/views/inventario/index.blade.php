<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white">     

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
               
            <tr>
                <th scope="col" class="px-6 py-3">REFERENCIA</th>
                <th scope="col" class="px-6 py-3">CATEGORIA</th>
                <th scope="col" class="px-6 py-3">COLOR</th>
                <th scope="col" class="px-6 py-3">CANTIDAD</th>
                <th scope="col" class="px-6 py-3">ESTADO</th>
                <th scope="col" class="px-6 py-3"></th>
                </th>
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
</x-app-layout>
