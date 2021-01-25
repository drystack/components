<div class="antialiased container">
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
    </div>
</div>
