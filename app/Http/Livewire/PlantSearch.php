<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Plant;

class PlantSearch extends Component
{
    public $query;
    public $plants;

    public function mount()
    {
        $this->query = '';
        $this->plants = [];
    }

    public function updatedQuery()
    {
        $this->plants = Plant::where('name', 'like', '%' . $this->query . '%')
            ->orWhere('disease_name', 'like', '%' . $this->query . '%')
            ->get();
    }

    public function render()
    {
        return view('livewire.plant-search');
    }
}
