<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditCategory extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $email;

    public function mount($category)
    {
        $this->category_id = $category->id;
       $this->name = $category->name;
       $this->description = $category->description;
       $this->icon = $category->icon;
    }
    public function render()
    {
        return view('livewire.edit-category');
    }
    public function update()
    {
        $validated = $this->validate([
            'name' => 'required|string|min:3',
            'description' => 'required',
            'icon' => 'required|image',
        ]);
        // upload foto
        $validated['icon'] = $this->icon->store('image','public');
        //convert string to slug
        $validated['slug'] = Str::slug($validated['name']);

        Category::where('id',$this->category_id)->update($validated);

        $this->name = NULL;
        $this->description = NULL;
        $this->icon = NULL;

        redirect()->route('dashboard.category')->with('success','Category Berhasil di Update');
    }
}
