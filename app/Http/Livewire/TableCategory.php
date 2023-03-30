<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class TableCategory extends Component
{
    public function render()
    {
        return view('livewire.table-category',[
            'users' => Category::orderBy('id','desc')->get()
        ]);
    }
}
