<div>
    <x-card title="Create User">
        <x-form wire:submit="createUser">
            <x-input wire:model="name" label="Full Name" />
            <x-input wire:model="email" label="Email Address" />
            <x-input wire:model="password" label="Password"/>
            <x-input wire:model="confirm_password" label="Confirm Password" />
            <x-slot:actions>
                <x-button type="submit" label="Submit" class="btn-outline" />
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
