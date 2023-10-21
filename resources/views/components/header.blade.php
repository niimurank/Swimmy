<div class="flex space-x-8 sm:-my-px sm:ml-10 sm:flex justify-around">
    <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
        <h1>最新の投稿</h1>
    </x-nav-link>
</div>