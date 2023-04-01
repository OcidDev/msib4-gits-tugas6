<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductTable extends Component
{
    protected $listeners = ['ProductCreate' => 'render'];
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.prodduct-table');
    }
    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('success','Product berhasil terhapus');
    }
}
