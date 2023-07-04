<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <!-- birthday -->
        <div class="mt-4">
            <x-input-label for="birthday" :value="__('Birthday')" />
            <x-text-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required autocomplete="bday" />
            <x-input-error :messages="$errors->get('birthday')" class="mt-2" />
        </div>
        
        <!-- sex -->
        <div class="mt-4">
            <x-input-label for="sex" :value="__('Gender')" />
            <div class="block">
                <x-text-input id="sex" class="mt-1" type="radio" name="sex" :value="1" />
                <label for="male">男性</label>
                <x-text-input id="sex" class="mt-1" type="radio" name="sex" :value="2" />
                <label for="famale">女性</label>
                <x-text-input id="sex" class="mt-1" type="radio" name="sex" :value="0" />
                <label for="notKnown">不明</label>
            </div>
            <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>
        
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
