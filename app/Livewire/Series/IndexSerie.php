<?php

namespace App\Livewire\Series;

use App\Models\Serie;
use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class IndexSerie extends Component
{
    use WithPagination;

    public $name = '';

    public function search()
    {
        $this->resetPage();
    }

    #[On('serie-created')]
    #[On('serie-updated')]
    #[On('serie-deleted')]
    public function updateSeriesList()
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.series.index-serie', [
            'series' => Serie::where('name', 'like', '%' . $this->name . '%')->paginate(5)
        ]);
    }
}
