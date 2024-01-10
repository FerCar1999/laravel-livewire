<div>
    <section>
        <form wire:submit='search'>
            <x-input-label class="flex w-full">{{ __('Buscar por nombre') }}</x-input-label>
            <x-text-input class="w-full" id="name" name="name" type="text" wire:model='name'
                placeholder="{{ __('Buscar por nombre de serie...') }}"></x-text-input>
            <div class="mt-2 flex justify-end">
                <x-danger-button>
                    {{ __('Buscar') }}
                </x-danger-button>
            </div>
        </form>
        <table class=" w-full text-center text-gray-500 dark:text-gray-400 mt-4">
            <thead class="text-white">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Compañia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Año Estreno
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($series as $serie)
                    <tr wire:key='{{ $serie }}'>
                        <td class="px-6 py-4">
                            {{ $serie->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $serie->company }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $serie->year }}
                        </td>
                        <td class="px-6 py-4">
                            <x-primary-button @click="$dispatch('open-update-modal',{serie:{{ $serie }}})">
                                <x-icon name="pencil-square" variant="outline" class="w-5 h-5"></x-icon>
                            </x-primary-button>
                            <x-danger-button @click="$dispatch('open-delete-modal',{serie:{{ $serie }}})">
                                <x-icon name="trash" variant="outline" class="w-5 h-5"></x-icon>
                            </x-danger-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $series->links() }}
    </section>
</div>
