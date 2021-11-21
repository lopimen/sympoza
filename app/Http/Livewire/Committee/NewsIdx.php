<?php

namespace App\Http\Livewire\Committee;

use Livewire\Component;

class NewsIdx extends Component
{
    public function render()
    {
        return view('livewire.committee.news-idx')->layout('adminlte::page');
    }
}
