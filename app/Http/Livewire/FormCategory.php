<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class FormCategory extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $icon;
    public function render()
    {
        return view('livewire.form-category');
    }
    public function store()
    {

        // Validasi
        $validated = $this->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
            'icon' => 'required|image',
        ]);
        // upload foto
        $validated['icon'] = $this->icon->store('image','public');
        //
        $validated['slug'] = Str::slug($validated['name']);
        Category::create($validated);

        $this->name = NULL;
        $this->description = NULL;
        $this->icon = NULL;

        session()->flash('success','User Berhasil Dibuat');
        $this->emit('CreateCategory');
    }


}
