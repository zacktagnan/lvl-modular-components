@props(['colspan', 'links'])

@if ($links)
    <tr>
        <td colspan="{{ $colspan }}" class="px-6 py-4 whitespace-nowrap">
            {!! $links !!}
        </td>
    </tr>
@endif
