<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Expediente') . ': ' . $expediente->numero_expediente }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <div class="flex justify-between items-center mb-3">
                        <p><span class="font-bold mr-2">Fecha de inicio:</span> {{ $expediente->fecha_inicio }}</p>
                        <p><span class="font-bold mr-2">Estado:</span>
                            {{ $expediente->id_estatus == 2 ? 'Inactivo' : 'Activo' }}
                        </p>
                    </div>
                    <p class="mb-3"><span class="font-bold">Asunto:</span><br> {{ $expediente->asunto }}</p>
                    @if ($expediente->user)
                        <p><span class="font-bold mr-2">Registro:</span> {{ $expediente->user->name }}</p>
                    @endif
                </div>
                <div class="flex justify-end items-center mb-3">
                    <a href="{{ route('expedientes.index') }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        Volver
                    </a>
                    <a href="{{ route('expedientes.edit', ['expediente' => $expediente->id]) }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                        Editar expediente
                    </a>

                    <form action="{{ route('expedientes.destroy', $expediente) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                            Eliminar expediente
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
