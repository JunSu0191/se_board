@props(['value'])

<th {{ $attributes->merge([ 'scope'=>'col','class' => 'px-6 py-3 border-b border-gray-300']) }}>
    {{ $value ?? $slot }}
</th>
