<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cargar carro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Registrar Carro</h1>

                    <form action="{{ route('carros.store') }}" method="POST">
                        @csrf

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <!-- Marca -->
                            <div>
                                <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label>
                                <input type="text" id="marca" name="marca" value="{{ old('marca') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('marca') border-red-500 @enderror" required>
                                @error('marca')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Modelo -->
                            <div>
                                <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label>
                                <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('modelo') border-red-500 @enderror" required>
                                @error('modelo')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Año -->
                            <div>
                                <label for="anio" class="block text-sm font-medium text-gray-700">Año</label>
                                <input type="number" id="anio" name="anio" value="{{ old('anio') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('anio') border-red-500 @enderror" required>
                                @error('anio')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Color -->
                            <div>
                                <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                                <input type="text" id="color" name="color" value="{{ old('color') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('color') border-red-500 @enderror" required>
                                @error('color')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Precio -->
                            <div>
                                <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                                <input type="number" step="0.01" id="precio" name="precio" value="{{ old('precio') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('precio') border-red-500 @enderror" required>
                                @error('precio')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Kilometraje -->
                            <div>
                                <label for="kilometraje" class="block text-sm font-medium text-gray-700">Kilometraje</label>
                                <input type="number" id="kilometraje" name="kilometraje" value="{{ old('kilometraje') }}" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm @error('kilometraje') border-red-500 @enderror">
                                @error('kilometraje')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit" class="px-4 py-2 bg-gray-500 text-white font-semibold rounded-md shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Registrar
                            </button>

                            <a href="{{ route('carros.index') }}"class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 ml-2">
                                volver
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
