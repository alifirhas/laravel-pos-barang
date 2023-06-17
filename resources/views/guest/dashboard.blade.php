<x-guestBarang-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Tampilkan data barang -->
                    <div class="relative overflow-x-auto">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                    </th>
                                    <th>
                                        Nama Barang
                                    </th>
                                    <th>
                                        barcode
                                    </th>
                                    <th>
                                        Harga satuan
                                    </th>
                                    <th>
                                        Stok
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($barangs) <= 0)
                                    <tr>
                                        <td colspan="5" class="text-center">Masih belum ada data</td>
                                    </tr>
                                @else
                                    @foreach ($barangs as $barang)
                                        <tr>
                                            <td></td>
                                            <td>
                                                {{ $barang->nama_barang }}
                                            </td>
                                            <td>
                                                {{ $barang->barcode }}
                                            </td>
                                            <td>
                                                @convertIDR($barang->harga_satuan)
                                            </td>
                                            <td>
                                                {{ $barang->stok }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
