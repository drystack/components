@props([
    'title' => '',
    'breadcrumbs' => []
])


<h2 class="font-sans text-neutral-700 text-2xl text-opacity-80 tracking-wide"><a href="">
    @foreach($breadcrumbs as $breadcrumb => $route)
        <a class="text-secondary-500" href="{{ route($route) }}">{{ __($breadcrumb) }}</a>/
    @endforeach
    {{ __($title) }}
</h2>
