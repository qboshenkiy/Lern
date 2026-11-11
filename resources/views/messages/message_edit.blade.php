@extends('layouts.main')

@section('title', 'Edit Message')

@section('content')
    <h1>Edit Message</h1>
    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $message->name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $message->email }}" required>
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required>{{ $message->message }}</textarea>
        </div>
        <button type="submit">Update Message</button>
    </form>
    <a href="{{ route('messages.index') }}">Back to Messages</a>
@endsection