<div>
    <section class="rooms flex p-2 text-center border bg-white hover:bg-gray-50">
        <a href="{{ route('rooms.show', ['room_id' => $room->id]) }}" class="select-none w-full" aria-label="View post details">
            <div class="main flex flex-col w-full">
                <div class="flex pt-2 ml-2">
                    <h3>{{ $room->name }}</h3>
                    <p class="ml-auto">所属ユーザー数: {{ $room->users_count }}</p>
                </div>
            </div>
        </a>
    </section>
</div>