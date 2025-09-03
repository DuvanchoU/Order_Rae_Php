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
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
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
        <td class="px-6 py-4">{{ $item->REFERENCIA_PRODUCTO }}</td>
        <td class="px-6 py-4">{{ $item->CATEGORIA_PRODUCTO }}</td>
        <td class="px-6 py-4">{{ $item->COLOR_PRODUCTO }}</td>
        <td class="px-6 py-4">{{ $item->CANTIDAD_PRODUCTO }}</td>
        <td class="px-6 py-4">{{ $item->ESTADO_PRODUCTO }}</td>
        <td class="flex items-center px-6 py-4">
            <a href="#" class="text-blue-600 hover:underline">Editar</a>
            <a href="#" class="text-red-600 hover:underline ms-3">Eliminar</a>
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
