<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.main');
    }
}
