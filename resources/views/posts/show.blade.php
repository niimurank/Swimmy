<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('posts.index') }}">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 rounded-full hover:bg-gray-200">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                <h1 class="mt-0.5">戻る</h1>
            </div>
        </a>
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
                        <img class="w-12 h-12 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Rounded avatar">
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