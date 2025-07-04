<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

class Login extends Component
{

    use Toast;

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function authUser()
    {
        $credentials = $this->validate();
        if(Auth::attempt($credentials)){
            $this->success('Logged In Successfully!');
            return redirect()->to('/');
        }
            $this->error('Invalid Credentials!');
            return redirect()->back();
    }

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
