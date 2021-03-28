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

                    <div class="hidden md:flex flex-wrap justify-between w-3/4">
                        <b class="w-full md:w-3/12">ID</b>
                        <b class="w-full md:w-3/12 text-center">Created at</b>
                        <b class="w-full md:w-3/12 text-center">Updated at</b>
                        <b class="w-full md:w-3/12 text-center">Value</b>
                    </div>

                    @foreach ($readings as $reading)

                        <div class="flex flex-wrap justify-between mt-4 mb-4 bg-gray-100 p-3">

                            <div class="flex flex-wrap items-center md:w-3/4 w-full">
                                <span class="w-full md:w-3/12 md:text-left text-center p-2 md:border-0 border-b-2 border-gray-200"> #{{ $reading->id }} </span>
                                <span class="w-full md:w-3/12 text-center p-2 md:border-0 border-b-2  border-gray-200">
                                    <span class="md:hidden block">Created at</span>
                                    {{ $reading->created_at }}
                                </span>
                                <span class="w-full md:w-3/12 text-center p-2 md:border-0 border-b-2  border-gray-200">
                                <span class="md:hidden block">Updated at</span>
                                    {{ $reading->updated_at }}
                                </span>
                                <span class="w-full md:w-3/12 text-center p-2">
                                    <span class="md:hidden block">Value</span>
                                    {{ $reading->value }}
                                </span>
                            </div>

                            <div class="flex flex-wrap justify-end md:w-1/4 w-full">
                                <x-button-link class="md:ml-4 self-center md:w-auto w-full mt-2 md:mt-0" href="{{ route('readings.show', $reading->id) }}">
                                    {{ __('View') }}
                                </x-button-link>
                                <x-button-link class="md:ml-4 self-center md:w-auto w-full mt-2 md:mt-0" href="{{ route('readings.edit', $reading->id) }}">
                                    {{ __('Edit') }}
                                </x-button-link>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>