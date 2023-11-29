@extends('layouts.app') <!-- Assuming you're using a main layout file -->

@section('content')
    <div class="container">
        <h1>Edit Translations</h1>
        <form action="{{ route('translations.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="group">Group:</label>
                <input type="text" class="form-control" id="group" name="group" required>
            </div>
            <div class="form-group">
                <label for="key">Key:</label>
                <input type="text" class="form-control" id="key" name="key" required>
            </div>
            <div class="form-group">
                <label for="language">Language:</label>
                <input type="text" class="form-control" id="language" name="language" required>
            </div>
            <div class="form-group">
                <label for="text">Translation:</label>
                <textarea class="form-control" id="text" name="text" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Translation</button>
        </form>
    </div>
@endsection
