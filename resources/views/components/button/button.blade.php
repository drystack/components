@props([
    'color' => 'primary',
    'format' => 'full',
    'custom' => null
])
@php($base = "px-6 py-2 rounded m-1 uppercase text-xs tracking-wide cursor-pointer ")

@if($format == 'outline')
    @php($class = $base . " shadow bg-transparent text-$color-500 border border-$color-500 hover:border-$color-700 hover:bg-$color-600 hover:text-white")
@elseif($format == 'text')
    @php($class = $base . " bg-transparent text-$color-500 font-normal underline hover:text-$color-600 focus:outline-none")
@else
    @php($class = $base . " shadow bg-transparent text-white bg-$color-700 border-$color-500 hover:border-$color-600 hover:bg-$color-600")
@endif

@if(isset($custom))
    @php($class = "")
@endif

@if(isset($attributes['type']))
    @php($tag = 'button')
@else
    @php($tag = 'div')
@endif

<{{$tag}} {{ $attributes->merge(['class' => $class]) }}>
    {{$slot}}
</{{$tag}}>

