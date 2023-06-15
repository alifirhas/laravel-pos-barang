<x-guestBarang-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Tampilkan data barang -->
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Barang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        barcode
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Harga satuan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Stok
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td></td>
                                        <td class="px-6 py-4">
                                            {{ $barang->nama_barang }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->barcode }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @convertIDR($barang->harga_satuan)
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $barang->stok }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <!-- Tampilkan link navigasi paginasi -->
                    <div class="mt-4">
                        {{ $barangs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guestBarang-layout>
