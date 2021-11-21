<?php

namespace App\Http\Livewire\News\Admin;

use Livewire\Component;
use App\Models\News_Sympozia;

class Add extends Component
{
    public $newsTitle;
    public $newsBody;
    public $content;
    protected $listeners = ['addNews_Admin' => 'addNews',
                            'deleteNews_admin' => 'deleteNews'];

    public function render()
    {
        return view('livewire.news.admin.add');
    }
    public function addNews(){
        $this->clearForm();
        $this->emit('addNewsModal_Admin');
    }

    public function clearForm(){
        $this->resetErrorBag();
        $this->newsTitle = '';
        $this->newsBody = '';
    }

    public function submitNews(){

        dd($this->content);
        /*$this->validate([
            'newsTitle' => 'required',
            'newsBody' => 'required',
        ]);
        */

        News::create([
            'title' => $this->newsTitle,
            'body' =>$this->newsBody,
        ]);
        $this->clearForm();
        session()->flash('success','News has been submitted');
        $this->emit('refreshNewsSection_Admin');
    }

    public function deleteNews($id){
        News::where('id', $id)->delete();
        $this->emit('refreshNewsSection_Admin');
    }
}
