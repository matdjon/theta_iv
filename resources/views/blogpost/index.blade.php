<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('blogpost.create-post')
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <h2 class="font-semibold text-xl py-4">
                    {{ __('Feeds') }}
                </h2>
                @forelse($posts as $post)
                    <div class="p-2 sm:p-4 mb-4 shadow sm:rounded-lg">
                        <div>
                            <a href="./blogpost/{{ $post->id }}">{{ ucfirst($post->title) }}</a>
                        </div>
                    </div>
                        @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
    
</x-app-layout>

<style>
    textarea {
        resize: none;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }
</style>