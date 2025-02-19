@props(['field', 'name', 'class' => 'mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md'])

<input
    type="{{ data_get($field, 'type') }}"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, data_get($field, 'value')) }}"
    class="{{ data_get($field, 'class', $class) }}"
    placeholder="{{ data_get($field, 'placeholder') }}"
    maxlength="{{ data_get($field, 'maxlength') }}"
/>
