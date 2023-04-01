<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;
    public $categories_id, $categories, $name, $description, $price, $photo;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.product-form');
    }
    public function store(){
        $validated = $this->validate([
            'categories_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|image',
        ]);
        // upload foto
        $validated['photo'] = $this->photo->store('image','public');
        //convert string to slug
        $validated['slug'] = Str::slug($validated['name']);
        Product::create($validated);

        $this->categories_id = NULL;
        $this->name = NULL;
        $this->description = NULL;
        $this->price = NULL;
        $this->photo = NULL;
        $this->emit('ProductCreate');
    }
}
