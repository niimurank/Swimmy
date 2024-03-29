<x-app-layout>
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container mx-auto">
        <div class="post">
            <x-post :post="$post" />
        </div>
            @if (count($comments) > 0)
            @foreach($comments as $comment)
            <div class="comments flex p-2 text-center border bg-white">
                <div class="comment ml-16 border-b-2 border-l-2 border-gray-300 pl-4 w-full">
                    <div class="profile mr-4 flex">
                        <div class="w-12 h-12 rounded-full">
                            @if (isset($comment->user->image))
                                <img class="rounded-circle" src="{{ Storage::url($comment->user->image) }}" alt="プロフィール画像">
                            @else
                                <img class="rounded-circle" src="{{ asset('images/default.png') }}" alt="プロフィール画像">
                            @endif
                        </div>
                        {{-- 認証していない人には名前を表示させないように--}}
                        @auth
                            <strong class="pt-2 ml-4">{{ $comment->user->name }}</strong>
                        @else
                            <div class="user_name font-extrabold">ユーザー</div>
                        @endauth
                    </div>
                    <div class="ml-16 text-left">
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        @else
            <div class="comments flex p-2 text-center border bg-white">
                <div class="ml-16 text-left">
                    <p>コメントはまだありません。</p>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>