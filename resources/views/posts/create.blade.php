<!DOCTYPE html>
<html lang ="ja">
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
    <head>
        <meta charset="UTF-8">
        <meta name="工事中">
    </head>
    <body>
        <div class="container mx-auto">
            <div class="posts">
                <form action="/posts" method="POST" class="post flex flex-col p-2 text-center border bg-white">
                    @csrf
                    <p>0.1秒を指定：<input type="time" name="post[time]" value="00:00:00.01" step="0.01"></p>
                    <textarea name="post[body]" placeholder="感想"></textarea>
                    <div class="flex justify-end mt-2">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>
</html>