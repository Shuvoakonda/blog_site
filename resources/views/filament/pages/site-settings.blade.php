<x-filament-panels::page>
    {{ $this->form }}

    <div class="flex justify-end mt-4">
        <x-filament::button wire:click="save" size="sm" icon="heroicon-o-check" class="w-32">
            Save
        </x-filament::button>
    </div>
</x-filament-panels::page>
