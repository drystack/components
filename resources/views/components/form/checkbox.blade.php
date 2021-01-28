@props([
    'value', 'valueUnchecked', 'name'
])
<div class="flex items-center gap-2">
    <input type="hidden" name="{{$name}}" value="{{$valueUnchecked}}" />
    <input type="checkbox" class="appearance-none h-6 w-6 shadow-none bg-neutral-100 rounded-md checked:bg-primary-500 focus:outline-none focus:shadow-inner form-check" />
    {{ $slot }}
</div>
