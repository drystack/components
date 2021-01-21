<div class="antialiased sans-serif container mb-2">
    <label for="{{ $attributes['field'] }}" class="font-semibold mb-1 text-neutral-700 block">{{ $attributes['label'] ?? '' }}</label>
    <div class="relative">
        <input
                class="w-full pl-4 pr-10 py-3 focus:ring-neutral-500 focus:border-neutral-900 focus:outline-none leading-none rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-neutral-700 bg-neutral-100 font-medium"
                type="{{ $attribute['type'] ?? 'text' }}" wire:model="{{ $attributes['field'] }}"
        />
        @error($attributes['field'])
            <div class="text-sm text-red-600 pt-1">{{ $message ?? '' }}</div>
        @enderror
    </div>
</div>
