<?php

namespace App\Http\Livewire\Author;

use Livewire\Component;
use App\Models\Profile_Sympozia;
use Auth;

class SubmissionIdx extends Component
{

    public function render()
    {
        return view('livewire.author.submission-idx')->layout('adminlte::page');
    }

    public function mount(){
        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        if(!$profile){
            return redirect()->route('user.profile');
        }
    }

    
}
