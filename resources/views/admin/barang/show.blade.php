<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Barang') }} - {{ $barang->nama_barang }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Tombol kembali, edit dan hapus --}}
                    <div class="w-full flex justify-between mb-2">
                        <a href="{{ URL::previous() }}" class="btn">Kembali</a>
                        <div class="flex gap-2">
                            <a href="{{ route('admin.barangs.edit', $barang) }}" class="btn btn-info">Edit</a>

                            <form action="{{ route('admin.barangs.destroy', $barang) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" onclick="return confirm('Yakin hapus barang ini?')"
                                    class="btn btn-error">
                            </form>
                        </div>
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

                    {{-- Data barang --}}
                    {{-- Barcode --}}
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Barcode</span>
                        </label>
                        <input type="text" placeholder="Barcode" name="barcode" maxlength="255"
                            class="input input-bordered w-full" disabled value="{{ $barang->barcode }}" />
                    </div>

                    {{-- nama_barang --}}
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Nama Barang</span>
                        </label>
                        <input type="text" placeholder="Nama barang" name="nama_barang" maxlength="255"
                            class="input input-bordered w-full" disabled value="{{ $barang->nama_barang }}" />
                    </div>

                    {{-- harga_satuan --}}
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Harga Satuan</span>
                        </label>
                        <div class="join">
                            <button class="btn join-item rounded-l-full">Rp</button>
                            <input type="number" placeholder="Harga satuan" name="harga_satuan" maxlength="12"
                                oninput="this.value=this.value.slice(0,this.maxLength)"
                                class="input input-bordered w-full join-item" placeholder="" disabled
                                value="{{ $barang->harga_satuan }}" />
                        </div>
                    </div>

                    {{-- stok --}}
                    <div class="form-control w-full">
                        <label class="label">
                            <span class="label-text">Stok</span>
                        </label>
                        <input type="number" placeholder="Stok" name="stok" maxlength="11"
                            oninput="this.value=this.value.slice(0,this.maxLength)" class="input input-bordered w-full"
                            placeholder="" disabled value="{{ $barang->stok }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
