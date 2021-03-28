<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editing') }}: <b>#{{ $reader->id }}</b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('readers.update', $reader->id) }}">
                        @method('PATCH')
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name') ?? $reader->name" required autofocus />
                        </div>

                        <!-- Location -->
                        <div>
                            <x-label for="location" :value="__('Location')" />

                            <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location') ?? $reader->location" required autofocus />
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
