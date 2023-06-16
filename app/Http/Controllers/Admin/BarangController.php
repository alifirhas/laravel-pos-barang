<?php

namespace App\Http\Controllers\Admin;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Barang\StoreBarangRequest;
use App\Http\Requests\Barang\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::paginate(10); // Menampilkan 10 produk per halaman

        return view('admin.barang.index', [
            'barangs' => $barangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        // Validate request otomatis

        // Validate user permission
        if(! Gate::allows('create_barang')){
            abort(403);
        }

        // Ambil data dari request
        $barcode = $request->input('barcode');
        $nama_barang = $request->input('nama_barang');
        $harga_satuan = $request->input('harga_satuan');
        $stok = $request->input('stok');

        // Store data ke database
        $query = Barang::insert([
            "barang_id" => 'UUID()',
            "barcode" => $barcode,
            "nama_barang" => $nama_barang,
            "harga_satuan" => $harga_satuan,
            "stok" => $stok,
        ]);

        return redirect()->route('admin.barangs.index')->with('success', 'Data barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
