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
                                <th>Numero expediente</th>
                                <th>Asunto</th>
                                <th>Fecha de inicio</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expedientes as $expediente)
                                <tr>
                                    <td>{{ $expediente->numero_expediente }}</td>
                                    <td>{{ $expediente->asunto }}</td>
                                    <td>{{ \Carbon\Carbon::parse($expediente->fecha_inicio)->format('d/m/Y') }}</td>
                                    <td>{{ $expediente->id_estatus === 1 ? 'Activo' : 'Inactivo' }}</td>
                                    <td>
                                        <div class="grid grid-cols-3">
                                            <div>
                                                <a href="{{ route('expedientes.show', ['expediente' => $expediente->id]) }}"
                                                    disabled="{{ $expediente->id_estatus === 2 }}"
                                                    class="text-white inline-block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 mb-1 focus:outline-none">
                                                    <x-eye-icon class="w-4 h-4" />
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{ $expediente->id_estatus !== 2 ? route('expedientes.edit', ['expediente' => $expediente->id]) : '' }}"
                                                    class="text-white inline-block {{ $expediente->id_estatus !== 2 ? 'bg-blue-700 hover:bg-blue-800' : 'bg-gray-500' }} focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 mb-1 focus:outline-none">
                                                    <x-edit-icon class="w-4 h-4" />
                                                </a>
                                            </div>
                                            <form
                                                action="{{ route('expedientes.destroy', ['expediente' => $expediente->id]) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    {{ $expediente->id_estatus === 2 ? 'disabled' : '' }}
                                                    class="text-white inline-block {{ $expediente->id_estatus !== 2 ? 'bg-red-700 hover:bg-red-800' : 'bg-gray-500' }} focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2 mb-1 focus:outline-none">
                                                    <x-trash-icon class="w-4 h-4" />
                                                </button>
                                            </form>
                                        </div>
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
