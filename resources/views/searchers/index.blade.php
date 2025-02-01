<x-app-other-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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

                        {{-- <div class="flex justify-end">
                            <a href="{{ data_get($action, 'url') }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded">
                                {{ data_get($action, 'text') }}
                            </a>
                        </div> --}}

                        <ul class="list-disc ml-7 mt-3">
                            @foreach ($action['options'] as $option)
                            {{-- <li>{{ $option }}</li> --}}
                            <li class="text-gray-600 dark:text-gray-400 hover:text-gray-900 hover:dark:text-gray-100 transition-colors duration-150">
                                <a href="{{ data_get($option, 'url') }}" title="Acceder a {{ data_get($option, 'title') }}" class="hover:underline">
                                    {{ data_get($option, 'title') }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                   </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-other-layout>
