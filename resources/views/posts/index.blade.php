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
        <div class="container">
            <h1 class="text-center">投稿</h1>
            <div class="posts">
                @foreach($posts as $post)
                <div class="post">
                    <h2 class="user">user_id:{{ $post->user_id }}</h2>
                    <p class="user_name">name:{{ $post->user->name }}</p>
                    <p class="body">body:{{ $post->body }} </p>
                    <p class="time">time:{{ $post->record->time }}</p>
                    <p class="distance">distance:{{ $post->record->distance->swim_distance }}</p>
                    <p class="style">style:{{ $post->record->style->style_name }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>
</html>