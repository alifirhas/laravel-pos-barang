<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- Tombol tambah barang --}}
                    <div class="flex w-full justify-end mb-2">
                        <a href="{{ route('admin.barangs.create') }}" class="btn btn-success">Tambah Barang</a>
                    </div>

                    {{-- Pesan sukses --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Pesan error --}}
                    @if (session('error'))
                        <div class="alert alert-error">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            {{ session('error') }}
                        </div>
                    @endif

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
                                    <th>
                                        Menu
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($barangs) <= 0)
                                    <tr>
                                        <td colspan="6" class="text-center">Masih belum ada data</td>
                                    </tr>
                                @else
                                    @foreach ($barangs as $barang)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <a href="{{ route('admin.barangs.show', $barang) }}" class="underline">
                                                    {{ $barang->nama_barang }}
                                                </a>
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
                                            <td>
                                                <div class="flex gap-2">
                                                    <a href="{{ route('admin.barangs.edit', $barang) }}"
                                                        class="btn btn-info">Edit</a>

                                                    <form action="{{ route('admin.barangs.destroy', $barang) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" value="Hapus"
                                                            onclick="return confirm('Yakin hapus barang ini?')"
                                                            class="btn btn-error">
                                                    </form>
                                                </div>
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
</x-admin-layout>
