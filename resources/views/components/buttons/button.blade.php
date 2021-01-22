@php($base = "px-6 py-2 text-medium rounded m-1 ")
@if(isset($attributes['primary']))
    @php($bg = "primary")
    @php($text = "white")
@elseif(isset($attributes['secondary']))
    @php($bg = "secondary")
    @php($text = "white")
@elseif(isset($attributes['neutral']))
    @php($bg = "neutral")
    @php($text = "white")
@elseif(isset($attributes['alert']))
    @php($bg = "alert")
    @php($text = "white")
@elseif(isset($attributes['success']))
    @php($bg = "success")
    @php($text = "white")
@elseif(isset($attributes['warning']))
    @php($bg = "warning")
    @php($text = "white")
@else
    @php($bg = "primary")
    @php($text = "white")
@endif

@if(isset($attributes['outline']))
    @php($class = $base . " bg-transparent text-$bg-500 border border-$bg-500 hover:border-$bg-700 hover:bg-$bg-600 hover:text-$text")
@elseif(isset($attributes['text']))
    @php($class = $base . " bg-transparent text-$bg-500 font-normal underline hover:text-$bg-600 focus:outline-none")
@else
    @php($class = $base . " bg-transparent text-$text bg-$bg-500 border-$bg-500 hover:border-$bg-600 hover:bg-$bg-600")
@endif

@if(isset($attributes['custom']))
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

