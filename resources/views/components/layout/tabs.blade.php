@php($tabs = $attributes['tabs'])
@php($first = array_key_first($attributes['tabs']))
@php($color = $attributes['color'] ?? 'primary')

<div x-data="{
            active_tab: '{{ $first }}',
            tabs: {{json_encode($tabs)}}
        }"
>

    <ul class="flex cursor-pointer mb-2">
        <template x-for="tab in Object.keys(tabs)" :key="tab">
            <li class="py-2 px-6 {{$attributes['class'] ?? ''}}" :class="active_tab === tab ? 'border-b-4 border-{{$color}}-500 text-{{$color}}-500' : 'text-neutral-400'" x-text="tabs[tab]" @click="active_tab = tab"></li>
        </template>
    </ul>

    @foreach($tabs as $key => $tab)
        <div x-show="active_tab === '{{$key}}'" >
            {{ ${$key} ?? '' }}
        </div>
    @endforeach

</div>

