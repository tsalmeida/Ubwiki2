@extends('layout')

@section('content')
    <div class="container">
        <x-white-board>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-weight-bold text-lg text-dark">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot>

                <div class="py-4">
                    <div class="mx-auto" style="max-width: 1200px;"> <!-- Adjusted max width -->
                        <div class="bg-white shadow rounded">
                            <div class="p-3 text-dark"> <!-- Text color adjusted -->
                                {{ __("You're logged in!") }}
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </x-white-board>
    </div>
@endsection
