<div>
    <x-modal name="create-serie-modal" focusable>
        <form wire:submit="create" class="p-4">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Agregar Serie') }}
            </h2>
            <div class="mt-4">
                <div>
                    <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full"
                        placeholder="{{ __('Nombre de la serie') }}" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-text-input wire:model="company" id="company" name="company" type="text"
                        class="mt-2 block w-full" placeholder="{{ __('Compañia') }}" />
                    <x-input-error :messages="$errors->get('company')" class="mt-2" />
                </div>
                <div>
                    <x-text-input wire:model="year" id="year" name="year" type="text" class="mt-2 block w-full"
                        placeholder="{{ __('Año de estreno') }}" />
                    <x-input-error :messages="$errors->get('year')" class="mt-2" />
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>
    
                <x-danger-button class="ms-3">
                    {{ __('Agregar') }}
                </x-danger-button>
            </div>
            <div class="mt-6 flex justify-center">
                <x-action-message class="me-3" on="serie-created">
                    {{ __('Registrado') }}
                </x-action-message>
            </div>
        </form>
    </x-modal>    
</div>
