<!DOCTYPE html>
<html lang ="ja">
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <head>
        <meta charset="UTF-8">
        <meta name="工事中">
    </head>
    <body>
        <div class="container mx-auto">
            <div class="posts">
                @foreach($posts as $post)
                <article class="post flex flex-col p-2 text-center border bg-white">
                    <div class="">
                        <div class="profile flex">
                        <img class="w-12 h-12 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="Rounded avatar">
                        <div class="user_name pt-2 font-semibold">{{ $post->user->name }}</div>
                        </div>
                        <h2 class="user">user_id:{{ $post->user_id }}</h2>
                        <p class="body">body:{{ $post->body }} </p>
                        <p class="time">time:{{ $post->record->time }}</p>
                        <p class="distance">distance:{{ $post->record->distance->swim_distance }}</p>
                        <p class="style">style:{{ $post->record->style->style_name }}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>
</html>