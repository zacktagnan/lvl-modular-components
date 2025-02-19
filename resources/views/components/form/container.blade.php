@props(['formAction'])

<form action="{{ data_get($formAction, 'url') }}" method="POST">
    @csrf
    @method(data_get($formAction, 'method', 'POST'))

    <div class="space-y-6 p-6 bg-white dark:bg-gray-800 dark:text-white shadow rounded-lg">
        {{ $slot }}
    </div>
</form>
