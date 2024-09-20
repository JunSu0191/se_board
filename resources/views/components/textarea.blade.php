@props(['disabled' => false, 'rows' => 4])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block mt-1 w-full border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50', 'rows' => $rows]) !!}>
{{ $slot }}
</textarea>
