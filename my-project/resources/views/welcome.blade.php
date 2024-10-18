@extends('Components.Template')
@section('title','Welcome')
 <!-- resources/views/auth/login.blade.php -->
@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
@endsection
