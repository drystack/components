@props(['stacked'])

@if($stacked)
    @include('drystack::components.nav.dropdown', ['attributes' => $attributes])
@else

<div x-data="{ open: false, active: 0 }" @open-group="open = $event.detail.open" x-init="$watch('open', value => console.log(value))">
    <div
        @click="open = !open"
        :class="active == 1 ? 'text-white bg-primary-800 ' : 'text-primary-50'"
        class="flex justify-between items-center p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-primary-50"
    >
        <div>
            @if(isset($attributes['icon']))
                <i class="{{$attributes['icon']}}"></i>
            @endif
            <span class="{{ isset($attributes['icon']) ? 'ml-2' : '' }}">
            {{$attributes['title'] ?? ''}}
        </span>
        </div>
        <div>
            <i class="fas fa-chevron-down float-right" :class="open === true ? 'transform rotate-180' : ''"></i>
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
