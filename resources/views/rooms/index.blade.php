<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container mx-auto">
        @foreach($rooms as $room)
            <x-room :room="$room" />
        @endforeach
    </div>
</x-app-layout>