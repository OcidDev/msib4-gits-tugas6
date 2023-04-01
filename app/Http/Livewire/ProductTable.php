<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductTable extends Component
{
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.prodduct-table');
    }
}
