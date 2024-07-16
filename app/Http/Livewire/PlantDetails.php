<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Plant;

class PlantDetails extends Component
{
    public $plantId;
    public $plant;

    protected $listeners = ['showPlantDetails' => 'show'];

    public function show($id)
    {
        $this->plantId = $id;
        $this->plant = Plant::find($id);
    }

    public function render()
    {
        return view('livewire.plant-details');
    }
}

