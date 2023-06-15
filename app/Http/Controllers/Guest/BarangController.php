<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::paginate(10); // Menampilkan 10 produk per halaman

        return view('guest.dashboard', [
            'barangs' => $barangs,
        ]);
    }
}
