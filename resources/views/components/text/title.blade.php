@props([
    'breadcrumbs' => []
])

<h2 class="font-sans text-neutral-700 text-2xl text-opacity-80 tracking-wide">
    @if(isset($breadcrumbs) && !empty($breadcrumbs))
        @foreach($breadcrumbs as $breadcrumb => $route)
            <a class="text-secondary-700 hover:text-secondary-600" href="{{ route($route[0], $route[1] ?? []) }}">
                {{ __($breadcrumb) }}
            </a>&nbsp;/&nbsp;
        @endforeach
    @endif
    {{ $slot }}
</h2>
