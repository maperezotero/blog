<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UsersIndex extends Component
{
	use WithPagination;

	public $search;

	protected $paginationTheme = 'bootstrap';

	public function updatingSearch(){
		$this->resetPage();
	}

    public function render()
    {
		$users = User::where('name', 'LIKE', '%' . $this->search . '%')
						->orWhere('email', 'LIKE', '%' . $this->search . '%')
						->paginate();

        return view('livewire.admin.users-index', compact('users'));
    }
}
