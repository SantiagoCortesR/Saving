@props(['value'])

<label {{ $attributes->merge(['class' => 'text-xs font-semibold px-1 text-gray-500']) }}>
    {{ $value ?? $slot }}
</label>
