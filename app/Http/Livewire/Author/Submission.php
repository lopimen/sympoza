<?php

namespace App\Http\Livewire\Author;

use Livewire\Component;

class Submission extends Component
{
    public $menu;
    protected $listeners=['resetMenuSubmission_Author' => 'resetMenu'];
    public function render()
    {
        return view('livewire.author.submission');
    }

    public function selectMenu(){
        $this->menu = 'add-paper';
    }
    public function resetMenu(){
        $this->menu = null; 
    }
}
