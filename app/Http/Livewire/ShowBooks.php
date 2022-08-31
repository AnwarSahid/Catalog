<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowBooks extends Component
{

    public $search;
    public $list;

    public function render()
    {


        if ($this->search == null) {
            $users = User::paginate($this->list);
        } else {
            $users =  User::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%')
                ->paginate(50);
        }
        return view('livewire.show-books', compact('users'));
    }


    public function detail(User $user)
    {
        // dd($user);
        return view('detail', compact('user'));
    }
}
