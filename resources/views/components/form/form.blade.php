<form {{ $attributes->merge(['class' => 'flex flex-1 flex-col items-start']) }} wire:submit.prevent="{{ $attributes['action'] ?? 'submit' }}">
    @csrf

    {{ $slot }}

    @if(isset($actions))
        {{ $actions }}
    @else
        <x-row class="justify-end mt-6">
            <x-button color="neutral" format="text" type="reset">{{__('drystack::drystack.form.cancel')}}</x-button>
            <x-button type="submit">
                <svg wire:loading wire:target="{{ $attributes['action'] ?? 'submit' }}" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                {{ $attributes['send-text'] ?? __('drystack::drystack.form.send') }}
            </x-button>
        </x-row>
    @endif
</form>
