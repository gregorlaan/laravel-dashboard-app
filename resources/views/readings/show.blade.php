<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reading') }}: <b>#{{ $reading->id }}</b>
            </h2>
            <x-button-link class="ml-4" href="{{ route('readings.edit', $reading->id) }}">
                {{ __('Edit') }}
            </x-button-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <p>Updated at: {{ $reading->updated_at }}</p>
                    <p>Value: {{ $reading->value }}</p>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
