<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index')->layout('adminlte::page');
    }
    public function mount(){
        if(!auth()->check()){
            return redirect()->route('login');
        }else{
            if(!Auth::user()->hasRole(['admin', 'committee', 'author', 'reviewer'])){
                Auth::user()->attachRole('committee');
            }
            if(Auth::user()->hasRole('author')){
                return redirect()->route('author.home');
            }
            if(Auth::user()->hasRole('committee')){
                return redirect()->route('committee.home');
            }
            if(Auth::user()->hasRole('admin')){
                return redirect()->route('admin.home');
            }
        }
    }
}
