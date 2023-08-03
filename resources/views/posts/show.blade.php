<!DOCTYPE html>
<html lang ="ja">
<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('posts.index') }}">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                <h1 class="mt-0.5">戻る</h1>
            </div>
        </a>
    </x-slot>
    <head>
        <meta charset="UTF-8">
        <meta name="工事中">
    </head>
    <body>
        <div class="container mx-auto">
            <div class="posts">
                <article class="post flex p-2 text-center border bg-white hover:bg-gray-50">
                    <div class="profile mr-4">
                        <img class="w-12 h-12 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Rounded avatar">
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="flex pt-2 ml-2">
                            <div class="user_name font-extrabold">{{ $post->user->name }}</div>
                            <div class="datetime text ml-auto">{{ $post->created_at->format('Y-m/d H:i') }}</div>
                        </div>
                        <div class="record flex felx-row border rounded-full my-2">
                            <p class="distance ms-2">{{ $post->record->distance->swim_distance }}m</p>
                            <p class="style ms-2">{{ $post->record->style->style_name }}</p>
                            <p class="time ml-auto select-all">{{ $post->record->time }}秒</p>
                        </div>
                        <p class="body text-left ml-2">{{ $post->body }}</p>
                        <div class="flex mt-2">
                            <div class="btn-good flex w-10 h-7 rounded-full hover:bg-pink-100">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto w-5 h-5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                <div class="select-none">2</div>
                            </div>
                            <div class="btn-reply flex w-10 h-7 rounded-full hover:bg-sky-200">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="m-auto w-5 h-5">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                                </svg>
                                <div class="select-none">1</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </body>
</x-app-layout>
</html>