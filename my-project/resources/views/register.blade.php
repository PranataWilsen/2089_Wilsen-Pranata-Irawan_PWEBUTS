@extends('components.template')

@section('title', 'Register')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-yellow-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-yellow-600 mb-6">Buat Akun dulu yuk, Bro</h2>

        <form action="/register" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama</label>
                <input type="text" name="name" id="name" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your name" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Create a password" required>
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="w-full bg-yellow-600 text-white p-3 rounded-md hover:bg-yellow-700 transition duration-300">Register</button>
        </form>

        <div class="mt-4 text-center">
            <p class="text-gray-600">Udah Punya Akun lu? 
                <a href="/login" class="text-yellow-600 hover:underline">Login lah!</a>
            </p>
        </div>
    </div>
</div>
@endsection
