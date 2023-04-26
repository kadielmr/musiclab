<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateAlbum extends Component
{
    public $title;
    public $artist;
    public $description;
    public $image;
    
    use WithFileUploads;
    
    protected $rules = [
        'title'=>'required',
        'artist'=>'required',
        'description'=>'required|min:6',
        'image'=>'required| mimes:png,jpg,bmp',
    ];
    
    protected $messages = [
        'title.required'=>'this field is required',
        'artist.required'=>'this field is required',
        'description.required'=>'this field is required',
        'image.required'=>'this field is required',   
    ];
    
    public function render()
    {
        return view('livewire.create-album');
    }
    
    public function store(){
        
        $this->validate();
        
        Album::create([
            
            'title'=>$this->title,
            'artist'=>$this->artist,
            'description'=>$this->description,
            'image'=>$this->image->store('public/image'),
            
        ]);
        
        $this->reset();
        
        return redirect(route('homepage'))->with('message', 'Album successfully created');
    }
    
    
}
