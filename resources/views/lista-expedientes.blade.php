<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de expedientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end items-center mb-3">
                        <a href="{{ route('expedientes.create') }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                            Agregar expediente
                        </a>

                    </div>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th>Numero de expediente</th>
                                <th>asunto</th>
                                <th>fecha de inicio</th>
                                <th>estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>00001</td>
                                <td>Asunto de prueba</td>
                                <td>2020-01-01</td>
                                <td>Activo</td>
                                <td>
                                    <a href="{{ route('expedientes.edit', ['expediente' => 1]) }}" class="text-white inline-block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 me-2 mb-2 focus:outline-none">
                                        <x-edit-icon class="w-4 h-4" />
                                    </a>
                                    <a href="{{ route('expedientes.destroy', ['expediente' => 1]) }}" class="text-white inline-block bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2 me-2 mb-2 focus:outline-none">
                                        <x-trash-icon class="w-4 h-4" />
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>00002</td>
                                <td>Asunto de prueba 2</td>
                                <td>2022-03-01</td>
                                <td>Inactivo</td>
                                <td>
                                    <a href="{{ route('expedientes.edit', ['expediente' => 1]) }}" class="text-white inline-block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 me-2 mb-2 focus:outline-none">
                                        <x-edit-icon class="w-4 h-4" />
                                    </a>
                                    <a href="{{ route('expedientes.destroy', ['expediente' => 1]) }}" class="text-white inline-block bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2 me-2 mb-2 focus:outline-none">
                                        <x-trash-icon class="w-4 h-4" />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
