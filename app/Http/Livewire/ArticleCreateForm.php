<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreateForm extends Component
{
    use WithFileUploads;
    
    public $title, $subtitle, $body, $image;

    // public $image = 'images/img_article_default.png';

    protected $rules = [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required|min:6',
        'image' => [
            'mimes:jpg,bmp,png',
            'max:2048'
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'image' => $this->image,
        ]);

        $this->image->storeAs('public/images' . $this->title);
    }




    public function render()
    {
        return view('livewire.article-create-form');
    }
}
