@if (Route::currentRouteNamed('posts.index'))
<div class="flex justify-center">
    <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
        <h1>最新の投稿</h1>
    </x-nav-link>
    <x-nav-link class="ml-12" :href="route('rooms.index')" :active="request()->routeIs('rooms.index')">
            <h1>メッセージ</h1>
        </x-nav-link>
</div>
@else
<div class="flex">
    <a href="{{ route('posts.index') }}">
        <div class="flex absolute">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 rounded-full hover:bg-gray-200">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            <h1 class="mt-0.5">戻る</h1>
        </div>
    </a>
    <div class="flex flex-auto justify-center">
        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
            <h1>最新の投稿</h1>
        </x-nav-link>
        <x-nav-link class="ml-12" :href="route('rooms.index')" :active="request()->routeIs('rooms.index')">
            <h1>メッセージ</h1>
        </x-nav-link>
    </div>
</div>
@endif