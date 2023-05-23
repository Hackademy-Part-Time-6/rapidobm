<?php


namespace App\Http\Livewire;
use App\Models\Ad;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAd extends Component
{


    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $category;
    public $images = [];
    public $temporary_images;
    public $image;

Protected $rules = [
    'title'=>'required|min:4',
    'body'=>'required|min:8',
    'category'=>'required',
    'price'=>'required',

];


public function store()
    {
        // datos validados
        $validatedData = $this->validate();
        // busco la categoria
        $category = Category::find($this->category);

        // creo el anuncio a partir de la categoria usando la relacion y pasando los datos validados
        $ad = $category->ads()->create($validatedData);

        // vuelvo a guardar el anuncio "pasando" por la relacion del usuario
        Auth::user()->ads()->save($ad);
        // guardo cada imagen en el db y en el storage
        if(count($this->images)){
            foreach ($this->images as $image) {
                $ad->images()->create([
                    'path'=>$image->store("images/$ad->id",'public')
                ]);
            }
        }

        session()->flash('message','Ad created successfully');
        $this->cleanForm();
    }



public function updated($propertyName) {
    $this->validateOnly($propertyName);
}

public function cleanForm()

{
    $this->title ="";
    $this->body ="";
    $this->category="";
    $this->price ="";

}


    public function render()
    {
        return view('livewire.create-ad');
    }


    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:2048'
        ])){
            foreach ($this-> temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

}
