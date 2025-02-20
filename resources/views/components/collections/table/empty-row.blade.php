@props(['colspan', 'message'])

<tr class="bg-gray-50 shadow-sm">
    <td colspan="{{ $colspan }}" class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900 dark:text-gray-100 text-center">
            {{ $message }}
        </div>
    </td>
</tr>
