@extends('layout.admin')
@section('content')

<div class="flex min-h-screen bg-gray-100">   
    {{-- Content --}}
    <div class="flex-1 flex flex-col">
        
        {{-- Header --}}
        <x-header title="Manajemen Transaksi" />

        <div class="p-6 space-y-6">

            {{-- Filter & Search --}}
            <div class="bg-white p-4 rounded-2xl shadow-sm border flex flex-col md:flex-row gap-3 md:items-center md:justify-between">

                <input 
                    type="text" 
                    placeholder="Cari transaksi / customer..." 
                    class="px-4 py-2 rounded-lg border border-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 text-sm w-full md:w-1/3"
                >

                <select class="px-4 py-2 rounded-lg border text-sm">
                    <option>Semua Status</option>
                    <option>Pending</option>
                    <option>Dibayar</option>
                    <option>Dikirim</option>
                    <option>Selesai</option>
                    <option>Batal</option>
                </select>

            </div>

            {{-- Tabel Transaksi --}}
            <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

                <table class="w-full text-sm">

                    <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-4 text-left">ID</th>
                            <th class="px-6 py-4 text-left">Customer</th>
                            <th class="px-6 py-4 text-left">Tanggal</th>
                            <th class="px-6 py-4 text-left">Total</th>
                            <th class="px-6 py-4 text-center">Status</th>
                            <th class="px-6 py-4 text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y">

                        @php
                            $transactions = [
                                ['id' => 'TRX001', 'nama' => 'Budi', 'tanggal' => '2026-04-09', 'total' => 11000, 'status' => 'Pending'],
                                ['id' => 'TRX002', 'nama' => 'Siti', 'tanggal' => '2026-04-08', 'total' => 25000, 'status' => 'Selesai'],
                                ['id' => 'TRX003', 'nama' => 'Andi', 'tanggal' => '2026-04-07', 'total' => 15000, 'status' => 'Dikirim'],
                            ];
                        @endphp

                        @foreach ($transactions as $trx)
                        <tr class="hover:bg-gray-50">

                            <td class="px-6 py-4 font-medium text-gray-800">
                                {{ $trx['id'] }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $trx['nama'] }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                {{ $trx['tanggal'] }}
                            </td>

                            <td class="px-6 py-4 text-gray-600">
                                Rp {{ number_format($trx['total'], 0, ',', '.') }}
                            </td>

                            {{-- Status Badge --}}
                            <td class="px-6 py-4 text-center">
                                <span class="
                                    px-3 py-1 rounded-full text-xs font-medium
                                    @if($trx['status'] == 'Pending') bg-yellow-100 text-yellow-700
                                    @elseif($trx['status'] == 'Dikirim') bg-blue-100 text-blue-700
                                    @elseif($trx['status'] == 'Selesai') bg-green-100 text-green-700
                                    @else bg-red-100 text-red-700
                                    @endif
                                ">
                                    {{ $trx['status'] }}
                                </span>
                            </td>

                            {{-- Aksi --}}
                            <td class="px-6 py-4 text-center space-x-2">

                                <button class="bg-blue-600 text-white px-3 py-1 rounded-md text-xs hover:bg-blue-700">
                                    Detail
                                </button>

                                <button class="bg-green-600 text-white px-3 py-1 rounded-md text-xs hover:bg-green-700">
                                    Update
                                </button>

                            </td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>
@endsection

