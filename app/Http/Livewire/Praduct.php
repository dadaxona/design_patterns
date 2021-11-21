<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Praduct extends Component
{
    public $title;
    public $name;
    public $infos=[];

    public function mouunt()
    {
        $this->infos[]='Aplicationis mouth....';
    }
    public function hydrate()
    {
        $this->infos[]='Aplicationis hydrate....';
    }
    public function updating($name,$value)
    {
        $this->infos[]='Aplicationis updating....';
    }
    public function update($name,$value)
    {
        $this->infos[]='Aplicationis update....';
    }
    public function updatingName()
    {
        $this->infos[]='Aplicationis updatingName....';
    }
    public function updatedName()
    {
        $this->infos[]='Aplicationis updated Name....';
    }


    public function render()
    {
        return view('livewire.praduct');
    }
}
