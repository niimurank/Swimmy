<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container mx-auto">
        <div class="posts">
            @foreach($posts as $post)
                <x-post :post="$post" />
            @endforeach
        </div>
        {{ $posts->links('pagination::tailwind') }}
    </div>
    <x-create-post-button />
</x-app-layout>