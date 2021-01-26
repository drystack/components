<form {{ $attributes->merge(['class' => 'flex flex-1 flex-col items-start']) }} wire:submit.prevent="{{ $attributes['action'] ?? 'submit' }}">
    @csrf
    <h3 class="text-xl font-light mb-8 text-muted antialiased">{{ $attributes['title'] ?? '' }}</h3>

    {{ $slot }}

    @if(isset($actions))
        {{ $actions }}
    @else
        <x-row class="justify-end mt-6">
            <x-button color="neutral" style="text" type="reset">Annulla</x-button>
            <x-button type="submit">{{ $attributes['send-text'] ?? 'Invia' }}</x-button>
        </x-row>
    @endif
</form>
