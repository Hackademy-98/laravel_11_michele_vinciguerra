<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Game extends Component
{

    use WithFileUploads;
    public $name;

    public $description;

    public $img;

    public function store(){
        Game::create([
            "name"=> $this->name,
            "description"=> $this->description,
            "img"=> $this->img ? $this->img ->store("public/images") : "public/images/default.png",
        ]);

        session()->flash("success","game created!");
    }
    
    public function render()
    {
        return view('livewire.game');
    }
}
