<?php

namespace App\Http\Livewire;

use App\Models\Book;
use App\Models\ESub;
use App\Models\ETit;
use App\Models\Title;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBooks extends Component
{
    use WithPagination;

    public $search;
    public $limit;


    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $query = ETit::query();
        $books = [];

        if ($this->search !== null) {
            $query->when($this->search !== null, function ($q) {
                $q->where('TitKey',  'like', '%' . strtolower($this->search) . '%')
                    ->orWhereHas('blibs', function ($qBlibs) {
                        $qBlibs->where('CalKey', 'like', '%' . strtolower($this->search) . '%')->orWhereHas('auts', function ($qAuts) {
                            $qAuts->where('AutKey', 'like', '%' . strtolower($this->search) . '%');
                        });
                    });
            });
            $books = $query->paginate(15);
        }



        return view('livewire.show-books', compact('books'));
    }

    public function detail(User $user)
    {
        // dd($user);
        return view('detail', compact('user'));
    }
}
