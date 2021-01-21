<form {{ $attributes->merge(['class' => 'flex flex-1 flex-col items-start']) }} wire:submit.prevent="{{ $attributes['action'] ?? 'submit' }}">

    <h3 class="text-xl font-light mb-8 text-muted sans-serif antialiased">{{ $attributes['title'] ?? '' }}</h3>

    {{ $slot }}

    <x-dry-row class="justify-end mt-6">
        <x-dry-button text neutral type="reset">Annulla</x-dry-button>
        <x-dry-button type="submit">{{ $attributes['send-text'] ?? 'Invia' }}</x-dry-button>
    </x-dry-row>
</form>
