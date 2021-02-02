@props([
    'cols' => '1'
    'rows' => '1'
    'gap' => '6'
])
@php($grid_cols_class = 'grid-cols-' . ($cols == 0 ? 'none' : $cols))
@php($grid_rows_class = 'grid-rows-' . ($rows == 0 ? 'none' : $rows))
@php($gap_class = 'gap-' . $gap)

<div {{ $attributes->merge(['class' => "$grid_rows_class $grid_cols_class $gap_class"]) }}>
    {{ $slot }}
</div>