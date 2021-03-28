<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Readings') }}
            </h2>
            <x-button-link class="ml-4" href="{{ route('readings.create') }}">
                {{ __('Add New') }}
            </x-button-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-wrap justify-between w-3/4">
                        <b class="w-3/12">ID</b>
                        <b class="w-3/12 text-center">Created at</b>
                        <b class="w-3/12 text-center">Updated at</b>
                        <b class="w-3/12 text-center">Value</b>
                    </div>

                    <hr>

                    @foreach ($readings as $reading)

                        <div class="flex flex-wrap justify-between mt-4 mb-4">

                            <div class="flex flex-wrap w-3/4">
                                <span class="w-3/12">#{{ $reading->id }} </span>
                                <span class="w-3/12 text-center">{{ $reading->created_at }}</span>
                                <span class="w-3/12 text-center">{{ $reading->updated_at }}</span>
                                <span class="w-3/12 text-center">{{ $reading->value }}</span>
                            </div>

                            <div class="flex flex-wrap justify-end w-1/4">
                                <x-button-link class="ml-4 self-center" href="{{ route('readings.show', $reading->id) }}">
                                    {{ __('View') }}
                                </x-button-link>
                                <x-button-link class="ml-4 self-center" href="{{ route('readings.edit', $reading->id) }}">
                                    {{ __('Edit') }}
                                </x-button-link>
                            </div>
                        </div>

                        <hr>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
