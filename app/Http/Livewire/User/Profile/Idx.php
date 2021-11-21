<?php

namespace App\Http\Livewire\User\Profile;

use Livewire\Component;

use App\Models\Profile_Sympozia;
use Auth;

class Idx extends Component
{
    public $profileMenu;
    public function render()
    {

        return view('livewire.user.profile.idx')->layout('adminlte::page');
    }

    public function mount(){
        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        if(!$profile){
            $this->profileMenu='create';
        }
    }
}
