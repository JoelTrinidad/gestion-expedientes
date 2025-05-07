<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Expediente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    <form action="{{ route('expedientes.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <x-input-label for="asunto" :value="__('Asunto')" />
                            <x-text-input id="asunto" class="block mt-1 w-full" type="text" name="asunto"
                                :value="old('asunto')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('asunto')" class="mt-2" />
                        </div>
                        <div class="mb-4">
                            <x-input-label for="fecha_inicio" :value="__('Fecha de inicio')" />
                            <x-text-input id="fecha_inicio" class="block mt-1 w-full" type="date" name="fecha_inicio"
                                :value="old('fecha_inicio')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('fecha_inicio')" class="mt-2" />
                        </div>
                        <div class="flex justify-end items-center">
                            <a href="{{ route('expedientes.index') }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                Volver
                            </a>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                Crear
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
