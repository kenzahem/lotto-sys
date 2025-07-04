<div>
    <x-header>
        <x-slot:middle class="!justify-end">
            <x-button wire:navigate link="/users/create" icon="o-circle-plus" label="Create User" class="btn-primary" />
        </x-slot:middle>
    </x-header>
    <x-card>
        <x-table :headers="$headers" :rows="$users" striped @row-click="alert($event.detail.name)" />
    </x-card>
</div>
