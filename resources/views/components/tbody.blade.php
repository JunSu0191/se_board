@props(['value'])

<td {{ $attributes->merge([ 'class' => 'px-6 py-4 border-b border-gray-300']) }}>
    {{ $value ?? $slot }}
</td>
