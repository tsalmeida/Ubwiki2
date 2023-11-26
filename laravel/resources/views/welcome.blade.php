@extends('layout')

@section('content')

    <x-white-board>
            <h1 class="text-center">{{ __('messages.welcome_to') }}</h1>
            <h2 class="text-center">{{ __('messages.slogan') }}</h2>

            <p>{{ __('messages.welcome') }}</p>
            <p>{{ __('messages.courses_description') }}</p>
            <p>{{ __('messages.notes_feature') }}</p>
            <p>{{ __('messages.encouragement') }}</p>

            <p><x-icon-button icon="fa fa-dinosaur" classes="bg-gray" title="Airplane" link="http://www.google.com/" /></p>

        <div id="editor">
            <!-- This is where the editor will appear -->
        </div>


            <!-- Login and Signup buttons -->
            <div class="text-center mt-4">
                <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#loginModal">
                    {{ __('messages.login') }}
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signupModal">
                    {{ __('messages.signup') }}
                </button>
            </div>

    </x-white-board>

    <!-- Include the modals -->
    @include('components.login_modal')
    @include('components.signup_modal')

@endsection


<!-- Include Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
