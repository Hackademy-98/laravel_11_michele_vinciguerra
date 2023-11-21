<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = 5;

    
    public function increment(){
        $this->number++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
