@extends('layout')

@section('content')

    <div class="container">
        <x-white-board>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Name -->
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')"/>
                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                    <x-input-error :messages="$errors->get('name')" class="text-danger"/>
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')"/>
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username"/>
                    <x-input-error :messages="$errors->get('email')" class="text-danger"/>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')"/>
                    <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password"/>
                    <x-input-error :messages="$errors->get('password')" class="text-danger"/>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>
                    <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password"/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger"/>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a class="text-decoration-none text-muted me-3" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="btn btn-primary ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </x-white-board>
    </div>

@endsection
