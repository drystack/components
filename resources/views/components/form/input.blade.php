@props([
    'icon' => null
])

@php($class = "w-full  pl-4 pr-2 py-3 rounded-lg leading-none focus:shadow-inner focus:outline-none")
@if(isset($attributes['disabled']))
    @php($class .= " bg-neutral-100 text-neutral-400")
@else
    @php($class .= " bg-neutral-100 text-neutral-800")
@endif
<div class="antialiased container">
    <x-label class="mb-1">{{ $attributes['label'] ?? '' }}</x-label>
    <div class="relative">
        <input
                {{ $attributes['field'] ? 'wire:model.debounce.500ms='.$attributes["field"] : '' }}
                {{ $attributes->merge(['class' => $class]) }}
        />

        @if(isset($icon))
            <div class="absolute top-0 right-0 px-3 py-2">
                {{ $icon }}
            </div>
        @endif

        <div class="text-xs text-red-600 inline-block">
            @error($attributes['field'])
                {{ $message ?? '&nbsp;' }}
            @enderror
        </div>
    </div>
</div>
