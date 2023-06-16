<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Pesan error --}}
                    @if ($errors->any())
                        <div class="alert alert-error">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

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

                    {{-- Form --}}
                    <form action="{{ route('admin.barangs.update', $barang) }}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Barcode --}}
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Barcode</span>
                            </label>
                            <input type="text" placeholder="Barcode" name="barcode" maxlength="255"
                                class="input input-bordered w-full" required value="{{ $barang->barcode }}" />
                        </div>

                        {{-- nama_barang --}}
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Nama Barang</span>
                            </label>
                            <input type="text" placeholder="Nama barang" name="nama_barang" maxlength="255"
                                class="input input-bordered w-full" required value="{{ $barang->nama_barang }}" />
                        </div>

                        {{-- harga_satuan --}}
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Harga Satuan</span>
                            </label>
                            <div class="join">
                                <button class="btn join-item rounded-l-full" disabled>Rp</button>
                                <input type="number" placeholder="Harga satuan" name="harga_satuan" maxlength="12"
                                    oninput="this.value=this.value.slice(0,this.maxLength)"
                                    class="input input-bordered w-full join-item" placeholder="" required
                                    value="{{ $barang->harga_satuan }}" />
                            </div>
                        </div>

                        {{-- stok --}}
                        <div class="form-control w-full">
                            <label class="label">
                                <span class="label-text">Stok</span>
                            </label>
                            <input type="number" placeholder="Stok" name="stok" maxlength="11"
                                oninput="this.value=this.value.slice(0,this.maxLength)"
                                class="input input-bordered w-full" placeholder="" required
                                value="{{ $barang->stok }}" />
                        </div>


                        {{-- Tombol tambah barang --}}
                        <div class="flex w-full justify-end mt-2">
                            <input type="submit" class="btn btn-success" value="Update Barang">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
