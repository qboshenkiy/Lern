@extends('layouts.main')

@section('title', 'Contact')
@section('content')
    <h1>Contact page</h1>
    
    <form action="{{ route('contact.submit') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message">{{ old('message') }}</textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
@endsection