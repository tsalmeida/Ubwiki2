<x-app-layout>
    <x-slot name="header">
        <h2 class="font-weight-bold text-lg text-dark">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="container px-sm-3 px-md-4">
            <div class="p-3 shadow rounded bg-white">
                <div class="mx-auto" style="max-width: 40rem;">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="mt-4 p-3 shadow rounded bg-white">
                <div class="mx-auto" style="max-width: 40rem;">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="mt-4 p-3 shadow rounded bg-white">
                <div class="mx-auto" style="max-width: 40rem;">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
