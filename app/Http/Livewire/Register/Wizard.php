<?php

namespace App\Http\Livewire\Register;

use Livewire\Component;

class Wizard extends Component
{
    public $number = 0;

    public function render()
    {
        return view('livewire.register.wizard');
    }

    public function increment() : void
    {
        $this->number ++ ;
    }

    public function decrement() : void
    {
        $this->number -- ;
    }
}
