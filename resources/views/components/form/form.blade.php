<form class="flex flex-1 flex-col items-start" wire:submit.prevent="{{ $attributes['action'] ?? 'submit' }}">

    {{ $slot }}

    <x-dry-row>
        <button type="reset">Annulla</button>
        <button type="submit">{{ $attributes['send-text'] ?? 'Invia' }}</button>
    </x-dry-row>
</form>
