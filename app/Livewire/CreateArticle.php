<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    use WithFileUploads;

    #[Validate(as: 'titolo')]
    public $title;

    #[Validate(as: 'descrizione')]
    public $description;


    #[Validate(as: 'prezzo')]
    public $price;


    #[Validate(as: 'categoria')]
    public $category;

    #[Validate(as: 'Immagini')]
    public $images = [];
    #[Validate(as: 'immagine temporanea')]
    public $temporary_images;

    public $article;

    protected $rules = [
        'title' => 'required|max:30|min:5',
        'description' => 'required|max:255|min:5',
        'price' => 'required|numeric',
        'category' => 'required',
    ];

    protected $messages = [
        '*.required' => 'Per favore, inserisci :attribute.',
        '*.min' => ':attribute deve avere almeno :min caratteri',
        '*.max' => ':attribute non può superare :max caratteri.',
        '*.numeric' => 'Per favore, inserisci un numero'
    ];


    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:20480',
        ])) {
            foreach ($this->temporary_images as $image) {
                array_push($this->images, $image);
            }
        } else {
            Log::info('Validation failed for images');
        }
    }


    public function removeImages($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
    public function save()
    {
        $this->validate();


        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);
        Log::info('Images Count:', ['count' => count($this->images)]);
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {

                $this->article->images()->create(['path' => $image->store('images02', 'public')]);
            }
        }

        $this->reset();
        session()->flash('success', 'Articolo creato correttamente');
    }
    public function render()
    {
        return view('livewire.create-article');
    }
}
