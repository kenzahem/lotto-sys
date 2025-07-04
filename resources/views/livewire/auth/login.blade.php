<div class="flex justify-center">
    <x-card title="Login" class="border border-accent w-1/2 ">
        <x-form wire:submit="authUser">
            <x-input wire:model="email" label="Email Address" />
            <x-password wire:model="password" label="Password" right />
            <x-slot:actions>
                <x-button type="submit" label="Login" class="btn-outline" />
            </x-slot:actions>
        </x-form>
    </x-card>
</div>
