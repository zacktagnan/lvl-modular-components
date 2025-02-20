<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <x-page-wrapper>
        <x-collections.form.container :formAction="$formAction">
            @foreach ($formFields as $name => $field)
                <div>
                    <x-collections.form.input-label :field="$field" :name="$name" />

                    <x-dynamic-component
                        :component="data_get($field, 'component', 'collections.form.text-input')"
                        :field="$field"
                        :name="$name"
                    />

                    <x-collections.form.input-hint :hint="data_get($field, 'hint')" />
                </div>

                <x-collections.form.input-error :messages="$errors->get($name)" class="mt-2" />
            @endforeach

            <div class="flex justify-end space-x-3">
                @foreach ($actions as $action)
                    <x-dynamic-component
                        :component="data_get($action, 'component', 'form.action-get')"
                        :action="$action"
                    />
                @endforeach

                <x-collections.form.submit-button :button="$submitButton" />
            </div>
        </x-collections.form.container>
    </x-page-wrapper>
</x-app-layout>
