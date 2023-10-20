<div>
    @auth
    <button onclick="toggleLike({{$post->id}})">
        <div id="like-button-{{ $post->id }}" class="btn-good flex w-10 h-7 rounded-full {{ $post->isLikedBy() ? 'hover:bg-pink-200' : 'hover:bg-pink-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto w-5 h-5 {{ $post->isLikedBy() ? 'fill-pink-500' : '' }}">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            <div class="select-none" id="likes-count-{{ $post->id }}">{{ $post->likes->count() }}</div>
        </div>
    </button>
    @else
    <div class="btn-good flex w-10 h-7 rounded-full hover:bg-pink-100">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
        </svg>
        <div class="select-none">{{ $post->likes->count() }}</div>
    </div>
    @endauth
</div>