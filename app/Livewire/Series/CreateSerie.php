<?php

namespace App\Livewire\Series;

use App\Models\Serie;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateSerie extends Component
{
    public string $name = '';
    public string $company = '';
    public string $year = '';

    public function create(): void
    {
        try {
            $validated = $this->validate([
                'name' => ['required', 'string'],
                'company' => ['required', 'string'],
                'year' => ['required'],
            ]);
            Serie::create($validated);
            $this->dispatch('serie-created');
            $this->clear();
        } catch (ValidationException $e) {
            throw $e;
        }
    }

    public function clear()
    {
        $this->name = "";
        $this->company = "";
        $this->year = "";
    }

    public function render()
    {
        return view('livewire.series.create-serie');
    }
}
