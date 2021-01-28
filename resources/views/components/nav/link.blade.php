@props(['route', 'stacked' => false, 'icon' => null])

@if($stacked)
    @include('drystack::components.nav.dropdown-link', ['attributes' => $attributes])
@else

@php
    $class = (Route::is($route) ? 'text-white bg-primary-800 ' : 'text-primary-200'). " block p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-primary-200";
@endphp

<a href="{{route($route)}}" {{ $attributes->merge(['class' => $class]) }}
   x-data
   x-init="'{{Route::is($route)}}' === '1' && $dispatch('open-group', {open: true})">
    @if(isset($icon))
        {{ $icon }}
    @endif
    <span class="{{ isset($attributes['icon']) ? 'ml-2' : ''}}">
        {{$slot}}
    </span>
</a>

@endif
