<div>
    <section class="post flex p-2 text-center border bg-white hover:bg-gray-50">
        <a href="/posts/{{ $post->id }}" class="select-none" aria-label="View post details">
            <div class="main flex flex-col w-full">
                <div class="flex pt-2 ml-2">
                    @auth
                        <div class="user_name font-extrabold">{{ $post->user->name }}</div>
                    @else
                        <div class="user_name font-extrabold">ユーザー</div>
                    @endauth
                    <div class="datetime text ml-auto text-gray-400">{{ $post->created_at->format('Y-m/d H:i') }}</div>
                </div>
                <div class="record flex flex-col border rounded-full my-2">
                    <div class="flex ms-2">
                        <p class="{{ $post->record->longcorse == 1 ? 'longcorse' : 'shortcorse' }}">
                            {{ $post->record->longcorse == 1 ? '長水路(50mプール)' : '短水路(25mプール)' }}
                        </p>
                    </div>
                    <div class="flex flex-row">
                        <p class="distance ms-2">{{ $post->record->distance->swim_distance }}m</p>
                        <p class="style ms-2">{{ $post->record->style->style_name }}</p>
                        <p class="time ml-auto select-all">@formatTime($post->record->time)秒</p>
                        <p class="time-at">{{ $post->record->time_at->format('Y-m/d') }}</p>
                    </div>
                </div>
                <p class="body text-left ml-2">{{ $post->body }}</p>
            </a>
            <div class="flex mt-2">
                
                <!-- Like button -->
                <x-like-button :post="$post" />
                <!-- Comment button -->
                <x-comment-button :post="$post" />
                <!-- Delete button -->
                @can('delete', $post)
                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');" class="ml-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md bg-red-100 border border-transparent font-semibold text-red-500 hover:text-white hover:bg-red-100 focus:outline-none focus:ring-2 ring-offset-white focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" aria-label="Delete post">削除</button>
                    </form>
                @endcan
            </div>
        </div>
    </section>
</div>