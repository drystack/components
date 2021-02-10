@props(['first', 'last', 'title', 'subtitle' => '', 'fields', 'pageaction' => null, 'action' => null, 'visible' => true])

<x-form wire:submit.prevent="{{ $action ?? 'submit' }}" :fields="$fields" :pageaction="$pageaction" class="{{ $visible ? '' : 'hidden'}}">
    <x-title>{{ $title }}</x-title>
    <span class="mt-2 mb-8">{{ $subtitle }}</span>

    <x-slot name="actions">
        <x-row class="justify-end mt-6">
            @if(!$first)
            <x-button color="neutral" format="text" wire:click="$emitUp('prev')">indietro</x-button>
            @endif
            @if(!$last)
            <x-button color="neutral" format="text" wire:click="$emitUp('next')">salta step</x-button>
            @endif
            <x-button type="submit">
                <svg wire:loading wire:target="{{ $attributes['action'] ?? 'submit' }}" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                {{ $last ? "Salva e completa form" : "Salva e prosegui" }}
            </x-button>
        </x-row>
    </x-slot>
</x-form>
