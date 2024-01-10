<?php
use Livewire\Volt\Component;
use App\Models\Serie;

new class extends Component {
    public $series;

    public function mount(): void
    {
        $this->series = Serie::all();
    }
};
?>

<section>
    <table class="table:auto w-full text-center text-gray-500 dark:text-gray-400">
        <thead class="text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Compañia
                </th>
                <th scope="col" class="px-6 py-3">
                    Año de estreno
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
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
                        <button class="bg-red-600 white-text dark:bg-red-600 dark:white-text" type="button" wire:click="delete" wire:confirm="Está seguro de eliminar esta serie?">Eliminar</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</section>
