<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing') }}: <b>#{{ $reading->id }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('readings.update', $reading->id) }}">
                        @method('PATCH')
                        @csrf

                        <!-- Value -->
                        <div>
                            <x-label for="value" :value="__('Value')" />

                            <x-input id="value" class="block mt-1 w-full" type="number" name="value" :value="old('value') ?? $reading->value" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button-cancel class="ml-4">
                                {{ __('Cancel') }}
                            </x-button-cancel>

                            <x-button class="ml-4">
                                {{ __('Save') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
