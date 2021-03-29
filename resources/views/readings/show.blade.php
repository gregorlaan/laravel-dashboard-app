<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reading') }}: <b>#{{ $reading->id }}</b>
            </h2>
            <x-button-link class="ml-4" :href="route('readers.show', $reading->reader_id)">
                {{ __('Go to Reader') }}
            </x-button-link>
            <x-button-link class="ml-4" :href="route('readings.edit', $reading->id)">
                {{ __('Edit') }}
            </x-button-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center flex">

                    <div class="w-full md:w-1/3">
                        <p class="text-xs">Created at</p>
                        <p class="text-xl">{{ $reading->created_at }}</p>
                    </div>

                    <div class="w-full md:w-1/3">
                        <p class="text-xs">Value</p>
                        <p class="text-xl">{{ $reading->value }}</p>
                    </div>

                    <div class="w-full md:w-1/3">
                        <p class="text-xs">Updated at</p>
                        <p class="text-xl">{{ $reading->updated_at }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
