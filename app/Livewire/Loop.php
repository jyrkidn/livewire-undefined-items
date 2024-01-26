<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Loop extends Component
{
    public function render()
    {
        return view('livewire.loop');
    }

    #[On('fetchItems')]
    public function fetchItems()
    {
        $this->dispatch('itemsFetched', items: [
            ['html' => fake()->sentence, 'id' => 1],
            ['html' => fake()->sentence, 'id' => 2],
            ['html' => fake()->sentence, 'id' => 3],
        ]);
    }
}
