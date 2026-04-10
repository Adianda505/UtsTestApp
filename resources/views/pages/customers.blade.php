@extends('layout.admin')

@section('content')

<div class="flex min-h-screen bg-gray-100">   
    
    <div class="flex-1 flex flex-col">
        
        {{-- Header --}}
        <x-header title="Customer" />

        <div class="p-6 space-y-6">

            {{-- Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="bg-white p-6 rounded-2xl shadow-sm border">
                    <p class="text-sm text-gray-500">Total Data</p>
                    <h2 class="text-3xl font-semibold mt-2">5</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border">
                    <p class="text-sm text-gray-500">Active</p>
                    <h2 class="text-3xl font-semibold text-green-600 mt-2">3</h2>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border">
                    <p class="text-sm text-gray-500">Inactive</p>
                    <h2 class="text-3xl font-semibold text-red-500 mt-2">2</h2>
                </div>
            </div>

            {{-- Top Bar --}}
            <div class="bg-white p-5 rounded-2xl shadow-sm border flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                {{-- Search --}}
                <div class="flex items-center gap-2 w-full md:w-1/3">
                    <input 
                        type="text" 
                        placeholder="Cari data..." 
                        class="w-full px-4 py-2 rounded-lg border border-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 text-sm"
                    >

                    <button class="bg-green-700 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-800 transition">
                        Search
                    </button>
                </div>

                {{-- Tambah --}}
                <button class="bg-green-700 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-800 transition self-start md:self-auto">
                    + Tambah Data
                </button>

            </div>

            {{-- Dummy Data --}}
            @php
                $data = [
                    ['nama' => 'Andi Saputra', 'email' => 'andi@mail.com', 'hp' => '081234567890', 'status' => 'Active'],
                    ['nama' => 'Budi Santoso', 'email' => 'budi@mail.com', 'hp' => '082345678901', 'status' => 'Active'],
                    ['nama' => 'Citra Lestari', 'email' => 'citra@mail.com', 'hp' => '083456789012', 'status' => 'Inactive'],
                    ['nama' => 'Dewi Anggraini', 'email' => 'dewi@mail.com', 'hp' => '084567890123', 'status' => 'Active'],
                    ['nama' => 'Eko Prasetyo', 'email' => 'eko@mail.com', 'hp' => '085678901234', 'status' => 'Inactive'],
                ];
            @endphp

            {{-- Table --}}
            <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

                <table class="w-full text-sm">

                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-4 text-left">Nama</th>
                            <th class="px-6 py-4 text-left">Email</th>
                            <th class="px-6 py-4 text-left">No HP</th>
                            <th class="px-6 py-4 text-left">Status</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">
                        @foreach ($data as $item)
                        <tr class="hover:bg-gray-50 transition">

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-9 h-9 rounded-full bg-green-600 text-white flex items-center justify-center text-sm font-medium">
                                        {{ strtoupper(substr($item['nama'], 0, 1)) }}
                                    </div>
                                    <span class="font-medium text-gray-800">{{ $item['nama'] }}</span>
                                </div>
                            </td>

                            <td class="px-6 py-4 text-gray-600">{{ $item['email'] }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $item['hp'] }}</td>

                            <td class="px-6 py-4">
                                @if ($item['status'] == 'Active')
                                    <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                        Active
                                    </span>
                                @else
                                    <span class="px-3 py-1 text-xs rounded-full bg-red-100 text-red-600">
                                        Inactive
                                    </span>
                                @endif
                            </td>

                            <td class="px-6 py-4 text-center space-x-2">
                                <button class="text-blue-600 hover:underline text-xs">
                                    Edit
                                </button>
                                <button class="text-red-600 hover:underline text-xs">
                                    Delete
                                </button>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            {{-- Pagination --}}
            <div class="flex items-center justify-between text-sm text-gray-500">
                <p>Showing 1–5 of 5</p>

                <div class="flex items-center gap-2">
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-100">Prev</button>
                    <button class="px-3 py-1 bg-green-700 text-white rounded-md">1</button>
                    <button class="px-3 py-1 border rounded-md hover:bg-gray-100">Next</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection