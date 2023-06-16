<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Barang\StoreBarangRequest;
use App\Http\Requests\Barang\UpdateBarangRequest;
use App\Models\Barang;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Validate user permission
        if (!Gate::allows('read_barang')) {
            abort(403, "Unauthorized action");
        }

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
        // Validate user permission
        if (!Gate::allows('create_barang')) {
            abort(403, "Unauthorized action");
        }

        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        // Validate request otomatis

        // Validate user permission
        if (!Gate::allows('create_barang')) {
            abort(403, "Unauthorized action");
        }

        try {
            // Ambil data dari request
            $barcode = $request->input('barcode');
            $nama_barang = $request->input('nama_barang');
            $harga_satuan = $request->input('harga_satuan');
            $stok = $request->input('stok');
    
            // Store data ke database
            $query = Barang::insert([
                "barang_id" => Str::uuid(),
                "barcode" => $barcode,
                "nama_barang" => $nama_barang,
                "harga_satuan" => $harga_satuan,
                "stok" => $stok,
            ]);
    
            return redirect()->route('admin.barangs.index')->with('success', 'Data barang berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('admin.barangs.index')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        // Validate user permission
        if (!Gate::allows('read_barang')) {
            abort(403, "Unauthorized action");
        }

        return view('admin.barang.show', [
            "barang" => $barang,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        // Validate user permission
        if (!Gate::allows('read_barang')) {
            abort(403, "Unauthorized action");
        }

        return view('admin.barang.edit', [
            "barang" => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        // Validasi data otomatis

        // Validate user permission
        if(! Gate::allows('update_barang')){
            abort(403, "Unauthorized action");
        }

        try {
            // Ambil data dari request
            $barcode = $request->input('barcode');
            $nama_barang = $request->input('nama_barang');
            $harga_satuan = $request->input('harga_satuan');
            $stok = $request->input('stok');
    
            // Update data di database
            $query = Barang::where('barang_id', $barang->barang_id)->update([
                "barcode" => $barcode,
                "nama_barang" => $nama_barang,
                "harga_satuan" => $harga_satuan,
                "stok" => $stok,
            ]);
            
            return redirect()->back()->with('success', 'Data barang berhasil diubah');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        // Validate user permission
        if(! Gate::allows('delete_barang')){
            abort(403, "Unauthorized action");
        }

        try {

            $findBarang = Barang::where('barang_id', $barang->barang_id);
            $findBarang->delete();

            return redirect()->route('admin.barangs.index')->with('success', 'Data barang berhasil dihapus');
        } catch (Exception $e) {
            return redirect()->route('admin.barangs.index')->with('error', $e->getMessage());
        }
    }
}
