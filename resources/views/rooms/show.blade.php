<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container mx-auto">
        @foreach ($messages as $message)
            <x-message :message="$message" />
        @endforeach
    </div>
</x-app-layout>