@extends('layout.admin')

@section('content')

    {{-- HEADER --}}
    <div class="mb-4">
        <x-header title="Dashboard" />
    </div>

    <div class="px-6 pb-10 ml-50">

        {{-- STATISTIC CARDS --}}
        <div class="grid grid-cols-4 gap-6 mt-6">
            <div class="bg-white shadow-lg rounded-xl p-5 border">
                <p class="text-sm text-gray-500">Total Produk</p>
                <h2 class="text-3xl font-bold mt-2">0</h2>
            </div>

            <div class="bg-white shadow-lg rounded-xl p-5 border">
                <p class="text-sm text-gray-500">Total User</p>
                <h2 class="text-3xl font-bold mt-2">0</h2>
            </div>

            <div class="bg-white shadow-lg rounded-xl p-5 border">
                <p class="text-sm text-gray-500">Transaksi Hari Ini</p>
                <h2 class="text-3xl font-bold mt-2">0</h2>
            </div>

            <div class="bg-white shadow-lg rounded-xl p-5 border">
                <p class="text-sm text-gray-500">Pendapatan</p>
                <h2 class="text-3xl font-bold mt-2">Rp 0</h2>
            </div>
        </div>

        {{-- CHART & ACTIVITY --}}
        <div class="grid grid-cols-3 gap-6 mt-8">
            <div class="col-span-2 bg-white shadow-lg rounded-xl p-6 border">
                <h3 class="font-semibold mb-4">Grafik Penjualan</h3>
                <div class="h-64 flex items-center justify-center text-gray-400 border-2 border-dashed rounded-lg">
                    Chart Area
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-xl p-6 border">
                <h3 class="font-semibold mb-4">Aktivitas Terbaru</h3>
                <ul class="space-y-3 text-sm">
                    <li>Belum ada aktivitas</li>
                </ul>
            </div>
        </div>

        {{-- TABLE --}}
        <div class="bg-white shadow-lg rounded-xl p-6 border mt-8">
            <h3 class="font-semibold mb-4">Transaksi Terbaru</h3>
            <table class="w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">ID</th>
                        <th class="py-2">Nama User</th>
                        <th class="py-2">Produk</th>
                        <th class="py-2">Tanggal</th>
                        <th class="py-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center py-4 text-gray-400">
                            Belum ada data
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection