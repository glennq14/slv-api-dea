<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>

    <section class="pt-12">
        <div class="py-3 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-5">
                <a href="{{ url('properties/create') }}" class="py-2 bg-blue-400 text-white rounded-md hover:bg-blue-500 px-5">
                    {{ __('+ Create New Property')  }}
                </a>
            </div>
            <div class="mt h-96 w-full b border rounded p-5 bg-white ">
                <h2>Property Listing</h2>
            </div>
        </div>
    </section>
</x-app-layout>
@push('scripts')

@endpush
