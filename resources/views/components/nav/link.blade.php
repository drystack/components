@php
    if (!isset($attributes['custom'])) {
        $class = (Route::is($attributes['route']) ? 'text-white bg-primary-800 ' : 'text-primary-200')
                . " block p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-primary-200";
    } else {
        $class = "";
    }
@endphp

<a href="{{route($attributes['route'])}}" {{ $attributes->merge(['class' => $class]) }}
   x-data=""
   x-init="() => {
        if ('{{Route::is($attributes['route'])}}' === '1')
            $dispatch('open-group', {open: true})
   }"
>
    @if(isset($attributes['icon']))
        <i class="{{$attributes['icon']}}"></i>
    @endif
    <span class="{{ isset($attributes['icon']) ? 'ml-2' : ''}}">
        {{$slot}}
    </span>
</a>
