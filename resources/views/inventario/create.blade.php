<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-md sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-700">Agregar Producto</h2>

                <form action="{{ route('inventario.store') }}" method="POST">
                    @csrf

                    <!-- Referencia -->
                    <div class="mb-4">
                        <label for="Referencia_producto" class="block mb-2 text-sm font-medium text-gray-700">
                            Referencia
                        </label>
                        <input type="text" id="Referencia_producto" name="Referencia_producto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Tipo" required>
                    </div>

                    <!-- Categoría -->
                    <div class="mb-4">
                        <label for="Categoria_producto" class="block mb-2 text-sm font-medium text-gray-700">
                            Categoría
                        </label>
                        <input type="text" id="Categoria_producto" name="Categoria_producto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Categoria" required>
                    </div>

                    <!-- Color -->
                    <div class="mb-4">
                        <label for="Color_producto" class="block mb-2 text-sm font-medium text-gray-700">
                            Color
                        </label>
                        <input type="text" id="Color_producto" name="Color_producto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Color" required>
                    </div>

                    <!-- Cantidad -->
                    <div class="mb-4">
                        <label for="Cantidad_producto" class="block mb-2 text-sm font-medium text-gray-700">
                            Cantidad
                        </label>
                        <input type="number" id="Cantidad_producto" name="Cantidad_producto" min="1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="" required>
                    </div>

                    <!--Ubicación-->
                    <div class="mb-4">
                        <label for="Ubicacion_producto" class="block mb-2 text-sm font-medium text-gray-700">
                            Ubicación
                        </label>
                        <input type="text" id="Ubicacion_producto" name="Ubicacion_producto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="" required>
                    </div>
                    
                    <!-- Estado -->
                    <div class="mb-4">
                        <label for="Estado_producto" class="block mb-2 text-sm font-medium text-gray-700">
                            Estado
                        </label>
                        <select id="Estado_producto" name="Estado_producto"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                   focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="">Seleccione...</option>
                            <option value="Disponible">Disponible</option>
                            <option value="Agotado">Agotado</option>
                        </select>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('inventario.index') }}" 
                           class="text-gray-700 bg-gray-200 hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Cancelar
                        </a>
                        <button type="submit" 
                            class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
