<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>
    
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4 space-y-6">
            <div class="p-2 sm:p-8">
                <div class="max-w-xl">
                    @include('client.partials.create-client-form')
                </div>
            </div>
        </div>
    </div>    
</x-guest-layout>