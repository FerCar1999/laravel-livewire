<?php

namespace App\Livewire\Series;

use App\Models\Serie;
use Livewire\Attributes\On;
use Livewire\Component;

class DeleteSerie extends Component
{
    public $serie;

    #[On('open-delete-modal')]
    public function mount($serie = null)
    {
        $this->serie = $serie;
        $this->render();
        $this->dispatch('open-modal', 'confirm-serie-deletion');
    }

    public function delete()
    {
        if ($this->serie != null) {
            Serie::where('uuid', $this->serie['uuid'])->delete();
            $this->dispatch('serie-deleted');
            $this->dispatch('close-modal', 'confirm-serie-deletion');
            $this->serie = null;
        }
    }

    public function render()
    {
        return view('livewire.series.delete-serie');
    }
}
