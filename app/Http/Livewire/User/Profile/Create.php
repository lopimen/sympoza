<?php

namespace App\Http\Livewire\User\Profile;

use App\Models\Profile_Sympozia;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $lastName;
    public $title;
    public function render()
    {
        return view('livewire.user.profile.create');
    }

    public function createProfile(){
        $this->validate([
            'lastName' => 'required',
        ]);

        $profile = Profile_Sympozia::where('user_id', Auth::user()->id)->first();
        if($profile){
            Profile_Sympozia::where('user_id', Auth::user()->id)->update([
                'last_name' => $this->lastName,
            ]);
            session()->flash('success','Profile has been updated');
        }else{
            Profile_Sympozia::create([
                'last_name' => $this->lastName,
                'user_id' =>  Auth::user()->id,
            ]);
            session()->flash('success','Profile has been created');
        }
        
    }
}
