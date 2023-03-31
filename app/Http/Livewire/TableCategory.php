<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class TableCategory extends Component
{
    protected $listeners = ['CreateCategory' => 'render'];
    public function render()
    {
        return view('livewire.table-category',[
            'users' => Category::orderBy('id','desc')->get()
        ]);
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('success','Category berhasil terhapus');
    }
}
