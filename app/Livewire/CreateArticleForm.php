<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    
    public $title; 
    public $description; 
    public $service; 
    public $article; 
    public $images = [];
    public $temporary_images;

    protected $rules =
     [ 'title' => 'required|min:5', 
     'description' => 'required|min:10', 
     'service' => 'required' ];

     protected $messages = 
     [ 'title.required' => 'Il titolo è richiesto.', 
     'title.min' => 'Il titolo è troppo corto.', 
     'description.required' => 'La descrizione è richiesta.', 
     'description.min' => 'La descrizione è troppo corta.', 
     'service.required' => 'Selezionare almeno una categoria.' ];


    public function store(){
        $this->validate();
        $this->article = Article::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'service_id'=>$this->service,
            'user_id'=>Auth::id()


        ]);

        if (count($this->images) > 0){
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                dispatch(new ResizeImage($newImage->path, 400, 400));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        

    
        session()->flash('success', __('Articolo creato con successo'));
        $this->cleanForm();

        
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }

    public function updatedTemporaryImages()
    {
        if ($this -> validate([
            'temporary_images.*'=> 'image|max:1024',
            'temporary_images'=> 'max:6'
        ])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->service = '';
        $this->images = [];
        
    }
   
}
