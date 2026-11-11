@extends('layouts.main')

@section('title', 'Show Message')

@section('content')
    <h1>Show Message</h1>
    <p><strong>Name:</strong> {{ $message->name }}</p>
    <p><strong>Email:</strong> {{ $message->email }}</p>
    <p><strong>Message:</strong> {{ $message->message }}</p>
    <p><strong>Created At:</strong> {{ $message->created_at }}</p>
    <a href="{{ route('messages.index') }}">Back to Messages</a>
@endsection