@extends('components.template')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-yellow-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-yellow-600 mb-6">LOGIN BANG!</h2>

        <form action="/login" method="POST">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full p-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your password" required>
            </div>

            <div class="flex items-center mb-4">
                <input type="checkbox" name="remember" id="remember" class="text-yellow-600 focus:ring-yellow-400 focus:outline-none">
                <label for="remember" class="ml-2 text-gray-600">Ingat Akun</label>
            </div>

            <button type="submit" class="w-full bg-yellow-600 text-white p-3 rounded-md hover:bg-yellow-700 transition duration-300">Login</button>
        </form>

        <div class="mt-4 text-center">
            <a href="/forgot-password" class="text-yellow-600 hover:underline">Lupa password ngab??</a>
        </div>

        <div class="my-6 border-t border-gray-300"></div>

        <div class="text-center">
            <p class="text-gray-600">Gapunya akun? 
                <a href="/register" class="text-yellow-600 hover:underline">DAFTAR DULU BRAYYY</a>
            </p>
        </div>
    </div>
</div>
@endsection
