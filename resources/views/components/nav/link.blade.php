<a href="{{route($attributes['route'])}}" class="{{ Route::is($attributes['route']) ? 'text-primary-50 bg-primary-800 ' : 'text-primary-50' }}
        block p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-primary-50"
   x-data=""
   x-init="() => {
        if ('{{Route::is($attributes['route'])}}' === '1')
            $dispatch('open-group', {open: true})
   }"
>
    @if(isset($attributes['icon']))
        <i class="{{$attributes['icon']}}"></i>
    @endif
    <span class="ml-2">
        {{$slot}}
    </span>
</a>
