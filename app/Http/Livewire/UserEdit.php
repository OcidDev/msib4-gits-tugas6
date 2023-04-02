<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserEdit extends Component
{
    public $user_id;

    public function mount($user_edit)
    {
        $this->user_id = $user_edit->id;
        $this->name = $user_edit->name;
        $this->email = $user_edit->email;
    }
    public function render()
    {
        return view('livewire.user-edit');
    }
    public function update()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,'.$this->user_id,
        ]);
        User::where('id',$this->user_id)->update([
            'name' => $this->name,
            'email'=> $this->email
        ]);

        $this->name = NULL;
        $this->email = NULL;

        redirect()->route('dashboard.user')->with('success','User Berhasil di Update');
    }
}
