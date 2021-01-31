@props([
    'value', 'valueUnchecked', 'name'
])
@php($is_disabled = isset($attributes['disabled']))
<div class="flex items-center gap-2">
    <input type="hidden" name="{{$name}}" value="{{$valueUnchecked}}" wire:model.debounce.500ms="{{$name}}"/>
    <input {{$attributes}} type="checkbox" name="{{$name}}" value="{{$value}}" wire:model.debounce.500ms="{{$name}}" class="appearance-none h-6 w-6 shadow-none bg-neutral-100 rounded-md {{ $is_disabled ? 'checked:bg-neutral-500' : 'checked:bg-primary-700'  }} focus:outline-none focus:shadow-inner form-check" />
    {{ $slot }}
</div>
