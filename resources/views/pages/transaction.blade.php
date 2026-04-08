@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex min-h-screen bg-gray-100">   

    {{-- Sidebar --}}
    @include('layout.admin')   

    {{-- Content --}}
    <div class="flex-1 flex flex-col">
        
        {{-- Header --}}
        <x-header title="Transaction" />

        <div class="p-6 grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- LEFT: PRODUCT LIST --}}
            <div class="lg:col-span-2 space-y-4">

                {{-- Search --}}
                <div class="bg-white p-4 rounded-2xl shadow-sm border">
                    <div class="flex gap-2">
                        <input 
                            type="text" 
                            placeholder="Cari produk..." 
                            class="w-full px-4 py-2 rounded-lg border border-green-600 focus:outline-none focus:ring-2 focus:ring-green-600 text-sm"
                        >
                        <button class="bg-green-700 text-white px-4 py-2 rounded-lg text-sm hover:bg-green-800">
                            Search
                        </button>
                    </div>
                </div>

                {{-- Dummy Produk --}}
                @php
                    $products = [
                        ['nama' => 'Indomie Goreng', 'harga' => 3500],
                        ['nama' => 'Aqua Botol', 'harga' => 4000],
                        ['nama' => 'Teh Pucuk', 'harga' => 5000],
                        ['nama' => 'Susu Ultra', 'harga' => 7000],
                        ['nama' => 'Roti Tawar', 'harga' => 12000],
                        ['nama' => 'Kopi Sachet', 'harga' => 2000],
                    ];
                @endphp

                {{-- Product List (tanpa gambar) --}}
                <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

                    <table class="w-full text-sm">

                        <thead class="bg-gray-50 text-gray-500 uppercase text-xs">
                            <tr>
                                <th class="px-6 py-4 text-left">Produk</th>
                                <th class="px-6 py-4 text-left">Harga</th>
                                <th class="px-6 py-4 text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">
                            @foreach ($products as $item)
                            <tr class="hover:bg-gray-50 transition">

                                <td class="px-6 py-4 font-medium text-gray-800">
                                    {{ $item['nama'] }}
                                </td>

                                <td class="px-6 py-4 text-gray-600">
                                    Rp {{ number_format($item['harga'], 0, ',', '.') }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    <button class="bg-green-700 text-white px-3 py-1 rounded-md text-xs hover:bg-green-800">
                                        + Tambah
                                    </button>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

            {{-- RIGHT: CART --}}
            <div class="bg-white p-5 rounded-2xl shadow-sm border flex flex-col">

                <h3 class="font-semibold mb-4">Keranjang</h3>

                {{-- Item --}}
                <div class="space-y-3 flex-1">

                    <div class="flex justify-between text-sm">
                        <div>
                            <p class="font-medium">Indomie Goreng</p>
                            <p class="text-gray-500 text-xs">x2</p>
                        </div>
                        <p>Rp 7.000</p>
                    </div>

                    <div class="flex justify-between text-sm">
                        <div>
                            <p class="font-medium">Aqua Botol</p>
                            <p class="text-gray-500 text-xs">x1</p>
                        </div>
                        <p>Rp 4.000</p>
                    </div>

                </div>

                {{-- Total --}}
                <div class="border-t pt-4 mt-4 space-y-2">
                    <div class="flex justify-between font-semibold text-sm">
                        <span>Total</span>
                        <span>Rp 11.000</span>
                    </div>

                    <button class="w-full bg-green-700 text-white py-2 rounded-lg hover:bg-green-800">
                        Bayar
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>