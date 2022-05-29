<x-guest-layout>
    <x-auth-card>
        ユーザーログイン
        <x-slot name="logo">
        <div class="w-12">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            
            <div class="block mt-4">
                <ui>
                    <li>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="/owner/login">
                            オーナーログイン
                        </a>
                    </li>
                    <li>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.register') }}">
                            新規登録
                        </a>
                    </li>
                </ui>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
             
            </div>        
                

               
            
        </form>
    </x-auth-card>
</x-guest-layout>
