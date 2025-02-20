<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <x-page-wrapper>
        <x-form.container :formAction="$formAction">
            @foreach ($formFields as $name => $field)
                <div>
                    <x-form.input-label :field="$field" :name="$name" />

                    <x-dynamic-component
                        :component="data_get($field, 'component', 'form.text-input')"
                        :field="$field"
                        :name="$name"
                    />

                    <x-form.input-hint :hint="data_get($field, 'hint')" />
                </div>

                <x-form.input-error :messages="$errors->get($name)" class="mt-2" />
            @endforeach

            <div class="flex justify-end space-x-3">
                @foreach ($actions as $action)
                    @if (data_get($action, 'method') === 'GET')
                        <a
                            href="{{ data_get($action, 'url') }}" title="{{ data_get($action, 'title') }}"
                            class="{{ data_get($action, 'class') }}"
                        >
                            {{ data_get($action, 'text') }}
                        </a>
                    @endif
                @endforeach

                <x-form.submit-button :button="$submitButton" />
            </div>
        </x-form.container>
    </x-page-wrapper>
</x-app-layout>
