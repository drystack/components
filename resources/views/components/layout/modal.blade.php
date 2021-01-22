<div x-data="{open: false}" x-cloak>
    {{ $show_modal }}
    <div  x-show="open" class="fixed top-0 bottom-0 left-0 right-0 bg-black bg-opacity-20 z-50">
        <div class="w-full h-full flex justify-center items-center">
            <div {{ $attributes->merge(['class' => 'bg-white p-8 rounded-md shadow-xl']) }} @click.away="open = false">
                <div>{{ $title }}</div>
                {{$slot}}
            </div>
        </div>
    </div>
</div>
