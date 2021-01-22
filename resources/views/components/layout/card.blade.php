<div {{ $attributes->merge(['class' => 'flex flex-col container max-w-screen-xl	mx-auto rounded bg-white shadow mb-4']) }}>
    @if(isset($attributes['title']) || isset($attributes['color']))
    @php($color = $attributes['color'] ?? 'primary')
    <div class="container text-{{$color}}-500 text-xl {{$attributes['title'] ? 'p-4' : ''}} antialiased border-t-8 border-{{$color}}-400 rounded-t">
        {{ $attributes['title'] ?? '' }}
    </div>
    @endif
    <div class="p-4">
        {{$slot}}
    </div>
</div>
