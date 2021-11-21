<?php

namespace App\Http\Livewire\News;

use Livewire\Component;
use App\Models\News_Sympozia;

class Home extends Component
{
    public $newsDetail;
    protected $listeners = ['refreshNewsSection_Admin' => '$refresh'];
    public function render()
    {
        $news = News_Sympozia::all();
        return view('livewire.news.home', compact('news'));
    }

    public function newsBody($id){
        $this->newsDetail = News_Sympozia::where('id', $id)->first();
        $this->emit('newsModal');
    }
}
