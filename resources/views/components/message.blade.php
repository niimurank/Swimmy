<div>
    <section class="rooms flex p-2 text-center bg-white">
            <div class="main flex flex-col w-full">
                    @if ($message->user_id == auth()->id())
                        <x-my-chatbubble :message="$message" />
                    @else
                        <x-chatbubble :message="$message" />
                    @endif
            </div>
    </section>
</div>