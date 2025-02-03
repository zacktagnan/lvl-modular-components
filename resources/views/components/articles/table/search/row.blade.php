@props(['loop', 'bgColor'])

<div class="flex justify-between items-center gap-4 p-2 rounded-md {{ !$loop->first ? 'mt-2' : '' }} {{ $bgColor }}">
    {{ $slot }}
</div>
