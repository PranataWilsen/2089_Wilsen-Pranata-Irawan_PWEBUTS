@extends('components.template')

@section('title', 'Homepage')

@section('content')
<div class="min-h-screen bg-yellow-50 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-yellow-600 mb-4">SELAMAT DATANG, NGAB!</h1>
        <p class="text-gray-700 mb-8">Yuk Manajemen Kontakmu Secara Baik!</p>

        <div class="overflow-x-auto bg-white shadow-lg rounded-lg p-6">
            <table class="min-w-full bg-white border border-gray-200 rounded-md">
                <thead class="bg-yellow-600 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">No.</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Whatsapp</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="border-b border-gray-200 hover:bg-yellow-100 transition duration-200">
                            <td class="py-4 px-6">{{ $loop->iteration }}</td>
                            <td class="py-4 px-6">{{ $contact['name'] }}</td>
                            <td class="py-4 px-6">{{ $contact['email'] }}</td>
                            <td class="py-4 px-6">{{ $contact['phone'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            <a href="/add-contact" class="bg-yellow-600 text-white py-2 px-4 rounded hover:bg-yellow-700 transition duration-300">Tambah Kontak Baru</a>
        </div>
    </div>
</div>
@endsection
