<?php

namespace App\Livewire\Users;

use App\Models\User;
use Mary\Traits\Toast;
use Livewire\Component;

class Index extends Component
{
    use Toast;

    public function headers()
    {
        return [
            ['key' => 'name', 'label' => 'Full Name'],
            ['key' => 'email', 'label' => 'Email Address']
        ];
    }

    public function users()
    {
        return collect(User::class);
    }

    public function render()
    {
        return view('livewire.users.index', [
            'headers' => $this->headers(),
            'users'   => $this->users()
        ]);
    }
}
