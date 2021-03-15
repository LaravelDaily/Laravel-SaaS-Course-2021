<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Billing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're on Free Plan.

                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div>
                            <h2 class="text-xl">Bronze plan</h2>
                            $9.99 / month
                            <br />
                            <x-button type="button" class="mt-4">Subscribe</x-button>
                        </div>
                        <div>
                            <h2 class="text-xl">Silver plan</h2>
                            $19.99 / month
                            <br />
                            <x-button type="button" class="mt-4">Subscribe</x-button>
                        </div>
                        <div>
                            <h2 class="text-xl">Gold plan</h2>
                            $29.99 / month
                            <br />
                            <x-button type="button" class="mt-4">Subscribe</x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
