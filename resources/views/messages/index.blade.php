<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
        <div class="container mx-auto">
            @foreach($rooms as $room)
                <p>{{ $room->name }}</p>
            @endforeach
        </div>
        @auth
        <a href="{{ route('posts.create') }}">
            <div class="fixed bottom-20 right-20 w-16 h-16 rounded-3xl border border-white flex justify-center items-center bg-sky-500">
                <svg class="w-6 h-6 text-white dark:text-white text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
            </div>
        </a>
        @endauth
</x-app-layout>