@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    @include('layout.admin')

    {{-- WRAPPER KANAN (HEADER + CONTENT) --}}
    <div class="flex-1 flex flex-col bg-gray-100 ">

        {{-- HEADER --}}
        <div>
            <x-header title="Dashboard" />
        </div>

        {{-- CONTENT DASHBOARD --}}
        <div class="px-6 pb-10">

            {{-- STATISTIC CARDS --}}
            <div class="grid grid-cols-4 gap-6 mt-6">
                <div class="bg-white shadow-lg rounded-xl p-5 border">
                    <p class="text-sm text-gray-500">Total Produk</p>
                    <h2 class="text-3xl font-bold mt-2">128</h2>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-5 border">
                    <p class="text-sm text-gray-500">Total User</p>
                    <h2 class="text-3xl font-bold mt-2">54</h2>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-5 border">
                    <p class="text-sm text-gray-500">Transaksi Hari Ini</p>
                    <h2 class="text-3xl font-bold mt-2">23</h2>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-5 border">
                    <p class="text-sm text-gray-500">Pendapatan</p>
                    <h2 class="text-3xl font-bold mt-2">Rp 4.500.000</h2>
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
                        <li>✔️ User baru mendaftar</li>
                        <li>✔️ Produk ditambahkan</li>
                        <li>✔️ Transaksi berhasil</li>
                        <li>✔️ Stok produk diperbarui</li>
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
                        <tr class="border-b">
                            <td class="py-2">TRX001</td>
                            <td>Andi</td>
                            <td>Laptop</td>
                            <td>01 Apr 2026</td>
                            <td class="text-green-600 font-semibold">Sukses</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">TRX002</td>
                            <td>Budi</td>
                            <td>Mouse</td>
                            <td>01 Apr 2026</td>
                            <td class="text-yellow-600 font-semibold">Proses</td>
                        </tr>
                        <tr>
                            <td class="py-2">TRX003</td>
                            <td>Siti</td>
                            <td>Keyboard</td>
                            <td>31 Mar 2026</td>
                            <td class="text-red-600 font-semibold">Batal</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>