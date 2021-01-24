<div class="antialiased sans-serif container">
    <label class="font-semibold mb-1 text-neutral-700 block">{{ $attributes['label'] ?? '' }}</label>
    <div class="relative">
        <input
                {{ $attributes['field'] ? 'wire:model.debounce.500ms='.$attributes["field"] : '' }}
                {{ $attributes->merge(['class' => 'w-full pl-4 pr-10 py-3 rounded-lg leading-none bg-neutral-100 focus:shadow-inner focus:outline-none']) }}
        />

        @if(isset($attributes['icon']))
            <div class="absolute top-0 right-0 px-3 py-2">
                <i class="{{ $attributes['icon'] }} text-neutral-400"></i>
            </div>
        @endif

        <div class="text-xs text-red-600 inline-block">
            @error($attributes['field'])
                {{ $message ?? '&nbsp;' }}
            @enderror
        </div>
    </div>
</div>
