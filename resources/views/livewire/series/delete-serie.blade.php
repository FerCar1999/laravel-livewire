<x-modal name="confirm-serie-deletion" focusable>
    <form wire:submit="delete" class="p-6">

        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Está seguro que desea borrar este registro?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Una vez sea eliminado, no se podrá recuperar este registro.') }}
        </p>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancelar') }}
            </x-secondary-button>

            <x-danger-button class="ms-3">
                {{ __('Si, estoy seguro') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>
