@props([
    'title' => null,
    'color' => null
])

<div {{ $attributes->merge(['class' => 'flex flex-col container max-w-screen-xl	mx-auto rounded bg-white shadow mb-4']) }}>
    @if(isset($title) || isset($color))
    <div class="container text-{{$color}}-500 text-xl {{$title ? 'p-4' : ''}} antialiased border-t-8 border-{{$color}}-400 rounded-t">
        {{ $title ?? '' }}
    </div>
    @endif
    <div class="p-4">
        {{$slot}}
    </div>
</div>
