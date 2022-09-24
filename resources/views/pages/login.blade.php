@extends('layouts.defaulte')

@section('content')
<div class="container-fluid p-5 mbd-section-container">
    <div class="row mbd-login-section mt-5">
        <div class="image col-md-6">
        <img src="{{asset ('img/loginimg.png')}}" class="mbd-img-login" >
        </div>
        <div class="col-sm-12 col-md-6 p-5 bg-white">
            <p class="h3">Connexion</p>    
            <form method="POST" action="{{ route('login') }}" class='mbd-formulaire-login'>
                @csrf
                <!-- Email Address -->
                <div>
                    <x-label for="email" :value="__('Email')" />
                    <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Mot de passe')" />
                    <x-input id="password" class="block mt-1 w-full form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Souvenir de moi') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <div class="row">
                        <div class="col-6">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié?') }}
                                </a><br>
                            @endif
                        </div>
                    </div>
                    <div class="col-6">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Creer un compte</a>
                        @endif
                    </div>
                    <x-button class="ml-3 mt-3 boutonConnexion">
                        {{ __('Connexion') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>  
@endsection