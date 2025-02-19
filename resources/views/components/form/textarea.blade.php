@props(['field', 'name', 'class' => 'mt-1 block w-full border-gray-300 dark:border-gray-600 rounded-md'])

<textarea
    name="{{ $name }}"
    id="{{ $name }}"
    rows="{{ data_get($field, 'rows', 3) }}"
    class="{{ data_get($field, 'class', $class) }}"
    placeholder="{{ data_get($field, 'placeholder') }}"
    maxlength="{{ data_get($field, 'maxlength') }}"
>{{ old($name, data_get($field, 'value')) }}</textarea>
