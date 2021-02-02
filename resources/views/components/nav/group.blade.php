@props(['stacked', 'icon' => null])

@if($stacked)
    @include('drystack::components.nav.dropdown', ['attributes' => $attributes, 'icon' => $icon])
@else

<div x-data="{ open: false, active: 0 }" @open-group="open = $event.detail.open" x-init="$watch('open', value => console.log(value))">
    <div
        @click="open = !open"
        :class="active == 1 ? 'text-white bg-primary-800 ' : 'text-primary-200'"
        class="flex justify-between items-center p-2 mt-2 rounded cursor-pointer hover:bg-primary-600 hover:text-primary-200"
    >
        <div class="flex gap-2 items-center">
            @if(isset($icon))
                {{ $icon }}
            @endif
            <span class="{{ isset($attributes['icon']) ? 'ml-2' : '' }}">
                {{$attributes['title'] ?? ''}}
            </span>
        </div>
        <div>
            <svg class="w-6 h-6 float-right" :class="open === true ? 'transform rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </div>
    </div>
    <div
            class="ml-4"
            x-show="open"
            x-transition:enter="transition-transform transition-opacity ease-out duration-300"
            x-transition:enter-start="opacity-0 transform -translate-y-4"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-end="opacity-0 transform -translate-y-3"
    >
        {{$slot}}
    </div>

</div>

@endif
