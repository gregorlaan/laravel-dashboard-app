<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new Reading') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('readings.store') }}">
                        @csrf

                        <div>
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="reader">
                                Reader
                            </label>
                            <div class="relative">
                                <select required id="reader" name="reader" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @foreach ($readers as $reader)
                                        <option value="{{ $reader->id }}">{{ $reader->name }} ({{ $reader->location }})</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                </div>
                            </div>
                        </div>

                        <!-- Value -->
                        <div>
                            <x-label for="value" :value="__('Value')" />

                            <x-input id="value" class="block mt-1 w-full" type="number" name="value" :value="old('value')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button-cancel class="ml-4">
                                {{ __('Cancel') }}
                            </x-button-cancel>

                            <x-button class="ml-4">
                                {{ __('Create') }}
                            </x-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
