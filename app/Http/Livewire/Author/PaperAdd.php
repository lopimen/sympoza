<?php

namespace App\Http\Livewire\Author;

use Livewire\Component;
use App\Models\Manuscript_Sympozia;
use Auth;

class PaperAdd extends Component
{
    public $title;
    public function render()
    {
        return view('livewire.author.paper-add');
    }

    public function submitAbstract(){

        $this->validate([
            'title' => 'required',
        ]);

        Manuscript_Sympozia::create([
            'title' => $this->title,
            'user_id' => Auth::user()->id,
        ]);

        //session()->flash('success', 'The manuscript has been submitted');

        return redirect()->route('author.submission');
        //$this->emitUp('resetMenuSubmission_Author');
    }
}
