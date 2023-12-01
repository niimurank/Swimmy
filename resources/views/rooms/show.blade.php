<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container mx-auto h-screen bg-white">
        <section class="rooms p-2 text-center bg-white">
            <ul class="space-y-2">
                @foreach ($messages as $message)
                    <x-message :message="$message" />
                @endforeach
            </ul>
        </section>
        <form action="{{ route('messages.store') }}" method="POST" class="flex w-1/3 p-4 bottom-0 end-0 absolute bottom-0">
                @csrf
                <input type="hidden" name="message[room_id]" value="{{ $room_id }}">
                <textarea id="message" name="message[body]" rows="1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="メッセージを入力..."></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    送信
                </button>
            </form>
    </div>
</x-app-layout>