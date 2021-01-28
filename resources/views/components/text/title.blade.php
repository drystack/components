@props([
    'title' => '',
    'breadcrumbs' => []
])


<h2 class="font-sans text-neutral-700 text-2xl text-opacity-80 tracking-wide"><a href="">
    @if(!empty($breadcrumbs))
        @foreach($breadcrumbs as $breadcrumb => $route)
            <a class="text-secondary-500 hover:text-secondary-600" href="{{ route($route) }}">{{ __($breadcrumb) }}</a>&nbsp;/&nbsp;
        @endforeach
    @endif
    {{ __($title) }}
</h2>
