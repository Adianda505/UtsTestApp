@extends('layout.admin')
@section('content')

<div class="flex min-h-screen bg-gray-100">   
    {{-- Content --}}
    <div class="flex-1 flex flex-col">

        {{-- Header --}}
        <x-header title="Settings" />

        <div class="p-6 space-y-6">

            {{-- PROFILE SETTINGS --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border">
                <h2 class="text-lg font-semibold mb-4">Profile</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                    <div>
                        <label class="text-sm text-gray-600">Nama</label>
                        <input type="text" value="Admin"
                            class="w-full mt-1 px-4 py-2 rounded-lg border focus:ring-2 focus:ring-green-600 text-sm">
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Email</label>
                        <input type="email" value="admin@mail.com"
                            class="w-full mt-1 px-4 py-2 rounded-lg border focus:ring-2 focus:ring-green-600 text-sm">
                    </div>

                </div>

                <button class="mt-4 bg-green-700 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-800">
                    Simpan Perubahan
                </button>
            </div>

            {{-- PASSWORD SETTINGS --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border">
                <h2 class="text-lg font-semibold mb-4">Ganti Password</h2>

                <div class="space-y-4">

                    <div>
                        <label class="text-sm text-gray-600">Password Lama</label>
                        <input type="password"
                            class="w-full mt-1 px-4 py-2 rounded-lg border focus:ring-2 focus:ring-green-600 text-sm">
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Password Baru</label>
                        <input type="password"
                            class="w-full mt-1 px-4 py-2 rounded-lg border focus:ring-2 focus:ring-green-600 text-sm">
                    </div>

                    <div>
                        <label class="text-sm text-gray-600">Konfirmasi Password</label>
                        <input type="password"
                            class="w-full mt-1 px-4 py-2 rounded-lg border focus:ring-2 focus:ring-green-600 text-sm">
                    </div>

                </div>

                <button class="mt-4 bg-green-700 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-800">
                    Update Password
                </button>
            </div>

            {{-- APP SETTINGS --}}
            <div class="bg-white p-6 rounded-2xl shadow-sm border">
                <h2 class="text-lg font-semibold mb-4">Pengaturan Aplikasi</h2>

                <div class="flex items-center justify-between py-2">
                    <span class="text-sm text-gray-600">Mode Gelap</span>
                    <input type="checkbox" class="w-5 h-5 accent-green-600">
                </div>

                <div class="flex items-center justify-between py-2">
                    <span class="text-sm text-gray-600">Notifikasi</span>
                    <input type="checkbox" checked class="w-5 h-5 accent-green-600">
                </div>

            </div>

        </div>
    </div>
</div>
@endsection