@props(['colspan', 'message'])

<tr colspan="{{ $colspan }}">
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900 dark:text-gray-100">
            {{ $message }}
        </div>
    </td>
</tr>
