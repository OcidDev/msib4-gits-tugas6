<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class TableCategory extends Component
{
    protected $listeners = ['CreateCategory' => 'render'];
    public function render()
    {
        $this->categories = Category::orderBy('id','desc')->get();
        return view('livewire.table-category');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('success','Category berhasil terhapus');
    }
}
