<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container mx-auto flex flex-col" style="height: calc(100vh - 10rem);">
        <section class="messages p-2 text-center bg-white overflow-y-auto h-screen">
            <ul class="space-y-2">
                @foreach ($messages as $message)
                    <x-message :message="$message"/>
                @endforeach
            </ul>
        </section>
        <form action="{{ route('messages.store') }}" method="POST" class="flex p-4 bottom-0 sticky bg-white">
                @csrf
                <input type="hidden" name="message[room_id]" value="{{ $room_id }}">
                <textarea id="message" name="message[body]" rows="1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="メッセージを入力..."></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    送信
                </button>
            </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var messageContainer = document.querySelector(".messages");
            messageContainer.scrollTop = messageContainer.scrollHeight;
        });
    </script>
</x-app-layout>