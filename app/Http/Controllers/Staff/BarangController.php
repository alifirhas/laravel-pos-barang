<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Http\Requests\Barang\StoreBarangRequest;
use App\Http\Requests\Barang\UpdateBarangRequest;
use App\Models\ActionLog;
use App\Models\Barang;
use Exception;
use Illuminate\Support\Facades\Auth;
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

        return view('staff.barang.index', [
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

        return view('staff.barang.create');
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
            $barangUUID = Str::uuid();
            $insetBarang = new Barang();

            $insetBarang->barang_id= $barangUUID;
            $insetBarang->barcode= $barcode;
            $insetBarang->nama_barang= $nama_barang;
            $insetBarang->harga_satuan= $harga_satuan;
            $insetBarang->stok= $stok;

            $insetBarang->save();

            // Simpan log create ke dalam action log
            ActionLog::insert([
                "user_id" => Auth::user()->id,
                "user_email" => Auth::user()->email,
                "activity_type" => "create",
                "object_type" => "barangs",
                "object_id" => $insetBarang->barang_id->toString(),
                "object_capture" => $insetBarang->toArray(),
                "created_at" => $insetBarang->created_at->toString(),
            ]);

            return redirect()->route('staff.barangs.index')->with('success', 'Data barang berhasil ditambahkan');
        } catch (Exception $e) {
            return redirect()->route('staff.barangs.index')->with('error', $e->getMessage());
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

        return view('staff.barang.show', [
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

        return view('staff.barang.edit', [
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
        if (!Gate::allows('update_barang')) {
            abort(403, "Unauthorized action");
        }

        try {
            // Ambil data dari request
            $barcode = $request->input('barcode');
            $nama_barang = $request->input('nama_barang');
            $harga_satuan = $request->input('harga_satuan');
            $stok = $request->input('stok');

            // Update data di database
            $updateBarang = Barang::find($barang->barang_id);
            $updateBarangBefore = new Barang($updateBarang->toArray());
            
            $updateBarang->barcode = $barcode;
            $updateBarang->nama_barang = $nama_barang;
            $updateBarang->harga_satuan = $harga_satuan;
            $updateBarang->stok = $stok;

            $updateBarang->save();

            // Simpan log update ke dalam action log
            ActionLog::insert([
                "user_id" => Auth::user()->id,
                "user_email" => Auth::user()->email,
                "activity_type" => "update",
                "object_type" => "barangs",
                "object_id" => $updateBarang->barang_id,
                "object_capture" => [
                    "before" => $updateBarangBefore->toArray(),
                    "after" => $updateBarang->toArray(),
                ],
                "created_at" => $updateBarang->updated_at->toString(),
            ]);

            return redirect()->back()->with('success', 'Data barang berhasil diubah');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort(403);
    }
}
