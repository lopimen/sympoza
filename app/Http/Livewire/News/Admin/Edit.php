<?php

namespace App\Http\Livewire\News\Admin;

use Livewire\Component;
use App\Models\News_Sympozia;

class Edit extends Component
{
    public $newsTitle;
    public $newsBody;
    public $newsId;
    protected $listeners = ['editNews_admin' => 'editNews'];
    public function render()
    {
        return view('livewire.news.admin.edit');
    }
    public function editNews($id){
        $news = News_Sympozia::where('id', $id)->first();
        $this->newsId = $id;
        $this->newsTitle = $news->title;
        $this->newsBody = $news->body;
        $this->reseterrorBag();
        $this->emit('editNewsModal_Admin');
    }

    public function updateNews(){
        $this->validate([
            'newsTitle' => 'required',
            'newsBody' => 'required',
        ]);

        News::where('id', $this->newsId)->update([
            'title' => $this->newsTitle,
            'body' =>$this->newsBody,
        ]);

        $this->clearForm();
        session()->flash('success','News has been updated');
        $this->emit('refreshNewsSection_Admin');
    }

    public function clearForm(){
        $this->resetErrorBag();
        $this->newsTitle = '';
        $this->newsBody = '';
    }
}
