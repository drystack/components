@props(['route', 'stacked' => false, 'icon' => null])

@if($stacked)
    @include('drystack::components.nav.dropdown-link', ['attributes' => $attributes])
@else

@php
    $active = Route::is($route);
    $class = ($active ? 'text-white bg-primary-800 ' : 'text-primary-200'). " flex gap-2 items-center p-2 mt-2 rounded cursor-pointer hover:bg-primary-600 hover:text-primary-200";
@endphp

<a href="{{route($route)}}" {{ $attributes->merge(['class' => $class]) }}
   x-data
   x-init="'{{$active}}' === '1' && $dispatch('open-group', {open: true})">
    @if(isset($icon))
        {{ $icon }}
    @endif
    <span class="{{ isset($attributes['icon']) ? 'ml-2' : ''}}">
        {{$slot}}
    </span>
</a>

@endif
