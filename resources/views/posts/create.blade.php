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
                <form action="/posts" method="POST" class="mt-10">
                    @csrf
                    <div class="flex flex-col p-2 text-center border bg-white">
                        <div class="flex m-4">
                            <div class="flex items-center">
                                <input checked id="default-radio-1" type="radio" value="0" name="post[longcorse]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">短水路(25mプール)</label>
                            </div>
                            <div class="flex items-center ml-2">
                                <input id="default-radio-2" type="radio" value="1" name="post[longcorse]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">長水路(50mプール)</label>
                            </div>
                        </div>
                        <div class="flex m-4">
                            <div>
                                <p>計測日</p>
                                <input name="post[date]" type="date" value="{{ date('Y-m-d') }}"/>
                            </div>
                            <div class="ms-2">
                                <p class="">計測タイム</p>
                                <input type="text" name="post[time]" placeholder="00:00.00" pattern="[0-5]\d:[0-5]\d(\.\d{1,2})?" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col p-2 text-center border bg-white mt-6">
                        <div class="m-4">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">感想</label>
                            <textarea name="post[body]" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="思ったことを１行でも書いてね"></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end mt-2">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</x-app-layout>
</html>