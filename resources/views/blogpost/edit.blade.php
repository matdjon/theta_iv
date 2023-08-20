<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="font-semibold text-xl py-4">
                    {{ ucfirst($post->title) }}
                </h2>
            </div>
            <div>
                <h4 class="py-2">
                    {{ ucfirst($post->detail) }}
                </h2>
            </div>
        </div>
    </div>
</x-app-layout>