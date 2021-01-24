<div class="ml-3 relative" x-cloak x-data="{ open: false, active: 0, hover: false }" @open-group="open = $event.detail.open" @mouseover.away = "open = false">
    <div @mouseenter="open = true">
        {{ $trigger ?? '' }}
        @unless(isset($trigger))
        <div
                @mouseenter="open = true"
                :class="active == 1
                ? 'text-white bg-primary-800 '
                : (hover === true
                    ? 'bg-primary-700 text-primary-50'
                    : 'text-primary-50')"
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
        </div>
        @endunless
    </div>
    <div x-show="open === true"
         @mouseenter="open = true; hover = true"
         @mouseover.away = "hover = false"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical">
        {{ $slot }}
    </div>
</div>
