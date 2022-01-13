<?php

namespace App\Http\Livewire\Committee\Submission;

use App\Models\Manuscript_Sympozia;
use Livewire\Component;

class View extends Component
{
    public function render()
    {
        return view('livewire.committee.submission.view',[
            'submissions' => Manuscript_Sympozia::all()
        ])->layout('adminlte::page');
    }
}
