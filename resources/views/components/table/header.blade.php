@props(['headers'])

<thead {{ $attributes->merge([
    'class' => 'text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-white shadow-sm sm:rounded-lg'
]) }}>
    <tr>
        @foreach ($headers as $header)
            <th class="px-6 py-3 text-left text-sm font-medium uppercase tracking-wider">
                {{ $header }}
            </th>
        @endforeach
    </tr>
</thead>
