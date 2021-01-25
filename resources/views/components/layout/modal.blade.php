<div x-data="{open: false}" x-cloak>
    {{ $show_modal }}
    <div  x-show="open" class="fixed top-0 bottom-0 left-0 right-0 bg-black bg-opacity-20 z-50">
        <div class="w-full h-full flex justify-center items-center">
            <div {{ $attributes->merge(['class' => 'bg-white p-4 rounded-md shadow-xl w-1/2 max-w-xl']) }} @click.away="open = false">
                <x-row class="justify-between items-center">
                    <h3 class="text-xl">{{ $attributes['title'] ?? '' }}</h3>
                    <svg @click="open = false" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </x-row>

                <div class="py-6 text-left">
                    {{$slot}}
                </div>

                <x-row class="justify-end items-center">
                    {{ $actions }}
                </x-row>
            </div>
        </div>
    </div>
</div>
