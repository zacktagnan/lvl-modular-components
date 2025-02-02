<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <x-page-wrapper>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ $welcomeMessage }}
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach ($actions as $action)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        {{ data_get($action, 'title') }}
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400">
                        {{ data_get($action, 'description') }}
                    </p>

                    <div class="flex justify-end">
                        <a href="{{ data_get($action, 'url') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">
                            {{ data_get($action, 'text') }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </x-page-wrapper>
</x-app-layout>
