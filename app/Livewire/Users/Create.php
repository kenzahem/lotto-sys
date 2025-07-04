<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Mary\Traits\Toast;

class Create extends Component
{

    use Toast;

    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|confirmed')]
    public $password = '';

    #[Validate('required')]
    public $confirm_password = '';

    public function authUser()
    {
        $validated = $this->validate();

        User::create($validated);
        $this->reset();
        $this->success('User Created!');

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
