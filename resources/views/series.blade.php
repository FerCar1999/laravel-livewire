<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Series') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 bg-gray-800 shadow sm:rounded-lg flex justify-center">
                <x-success-button x-data="" x-on:click.prevent="$dispatch('open-modal','create-serie-modal')">{{ __('Agregar Serie') }}</x-success-button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-2">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <livewire:series.index />
            </div>
        </div>
    </div>
    <livewire:series.create />
</x-app-layout>
