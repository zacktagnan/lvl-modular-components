@props(['field', 'name', 'class' => 'block text-sm font-medium text-gray-700 dark:text-gray-200'])

<label
    for="{{ $name }}"
    class="{{ $class }}"
>
    {{ data_get($field, 'label') }}
</label>
