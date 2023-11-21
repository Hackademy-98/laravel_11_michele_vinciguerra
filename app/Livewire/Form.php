<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $text;

    public function showText(){
        dd($this->text);
    }
    public function render()
    {
        return view('livewire.form');
    }
}
