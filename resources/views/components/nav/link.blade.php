<a href="{{route($attributes['route'])}}" class="{{ Route::is($attributes['route']) ? 'text-primary-50 bg-primary-800 ' : 'text-primary-50' }}
        block p-2 mt-2 rounded cursor-pointer hover:bg-primary-700 hover:text-primary-50">
    {{$slot}}
</a>
