@extends('layout')

@section('content')

    <div class="container">
        <x-white-board>
            <h1>{{ __('messages.welcome_to') }}</h1>
            <h2>{{ __('messages.slogan') }}</h2>

            <p>{{ __('messages.welcome') }}</p>
            <p>{{ __('messages.courses_description') }}</p>
            <p>{{ __('messages.notes_feature') }}</p>
            <p>{{ __('messages.encouragement') }}</p>

        </x-white-board>

        <x-white-board>
            <h1>Environments</h1>
            <p>Ubwiki has three facets you can visit:</p>
            <ul>
                <li>
                    <x-icon-button icon="fa fa-dinosaur" classes="bg-gray" title="Airplane"
                                   link="http://www.google.com/"/>
                    Office
                </li>
                <li>
                    <x-icon-button icon="fa fa-dinosaur" classes="bg-gray" title="Airplane"
                                   link="http://www.google.com/"/>
                    Courses
                </li>
                <li>
                    <x-icon-button icon="fa fa-dinosaur" classes="bg-gray" title="Airplane"
                                   link="http://www.google.com/"/>
                    Public Library
                </li>
            </ul>
        </x-white-board>

        <x-white-board>
            <h1>About your Office</h1>
            <p>In your office, you will find the artifacts that result from your studies in the other areas of Ubwiki.
                For example, articles you wrote, study notes, pages marked as studied, your participation in forums and
                others.</p>

            <p>Also in your office you can set a nickname, which will allow you to take part in the forum, as well as to
                those a combination of color and icon which will form your avatar.</p>

            <p>And finally, in your office you can create pages and text documents. Pages can be turned into
                full-fledged courses, as long as they have a title and no sections.</p>
            <h1>About the Courses</h1>
            <p>Courses are structures that contain and shape the information stored at Ubwiki. Courses are divided in
                modules containing topics, which are standard Ubwiki pages, capable of carrying a number of element
                types, such as images and videos, as well as study notes which are private to the users with access to
                it.</p>

            <p>Courses can be shared in a number of ways: they can be limited to their authors or shared with a study
                group or individual. It is also possible to block other users from changing the course content, which is
                thus treated as an 'authored' work. In this way, something like a book can be fully written in Ubwiki,
                while making use of the forum for each page so that an engaged community can help the author realize his
                creative vision.</p>
            <h1>About the Public Library</h1>
            <p>In the library, users will find information about works of a number of types, such as books, movies,
                music records and the such. Library items added to your office will become a part of your personal
                collection.</p>

            <p>Above all, we recommend users to write about books they read as a knowledge fixation method. To take part
                in a community effort to improve book summaries is possibly one of the best ways to study a book.</p>
        </x-white-board>

    </div>

    <!-- Include the modals -->
    @include('components.modal_languages')
    @include('components.modal_login_choice')

@endsection


<!-- Include Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
