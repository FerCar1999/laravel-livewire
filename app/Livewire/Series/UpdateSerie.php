<?php

namespace App\Livewire\Series;

use App\Models\Serie;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\On;
use Livewire\Component;

class UpdateSerie extends Component
{
    public $serie;
    public string $name = "";
    public string $company = "";
    public string $year = "";

    #[On('open-update-modal')]
    public function mount($serie = null)
    {
        $this->serie = $serie;
        if ($this->serie != null) {
            $this->name = $this->serie['name'];
            $this->company = $this->serie['company'];
            $this->year = $this->serie['year'];
        }
        $this->render();
        $this->dispatch('open-modal', 'update-serie-modal');
    }

    public function update(): void
    {
        try {
            $validated = $this->validate([
                'name' => ['required', 'string'],
                'company' => ['required', 'string'],
                'year' => ['required'],
            ]);
            Serie::where('uuid', $this->serie['uuid'])->update($validated);
            $this->dispatch('serie-updated');
            $this->clear();
        } catch (ValidationException $e) {
            throw $e;
        }
    }

    public function clear()
    {
        $this->serie = null;
        $this->name = "";
        $this->company = "";
        $this->year = "";
    }

    public function render()
    {
        return view('livewire.series.update-serie');
    }
}
