@props([
    'tabs',
    'color' => 'primary'
])
@php($first = array_key_first($tabs))

<div class="w-full" x-data="{active_tab: '{{ $first }}', tabs: {{json_encode($tabs)}}}">

    <ul class="flex w-full cursor-pointer mb-2">
        <template x-for="tab in Object.keys(tabs)" :key="tab">
            <li {{ $attributes->merge(['class' => 'py-2 px-6']) }} :class="active_tab === tab ? 'border-b-4 border-{{$color}}-500 text-{{$color}}-500' : 'text-neutral-400'"
                x-text="tabs[tab]"
                @click="active_tab = tab"></li>
        </template>
    </ul>

    @foreach($tabs as $key => $tab)
        <div x-show="active_tab === '{{$key}}'" >
            {{ ${$key} ?? '' }}
        </div>
    @endforeach

</div>

