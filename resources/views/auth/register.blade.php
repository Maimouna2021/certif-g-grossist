<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <style>

            form{
            background-color: :#7851C8;
           
            width: 350px;
           
            height: auto;
           
            position: absolute;
           
            left: 50%;
           
            top: 50%;

            padding: 10px;
            
            transform: translate(-50%, -50%);
           
            -webkit-transform: translate(-50%, -50%);
        
            }
           
            </style>
        <div class=""> 
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nom')"  />

                <x-text-input id="name" class="block mt-1 mb-3 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Enregistré') }}
                </x-primary-button>
            </div>
        </form>
        </div>

    </x-auth-card>
</x-guest-layout>
