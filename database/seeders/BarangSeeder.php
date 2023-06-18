<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            [
                "barang_id" => "37a09eb2-e6b8-405c-8bce-b2d478c3cf90",
                "barcode" => "fddsfg",
                "nama_barang" => "Ikan goreng krispi",
                "harga_satuan" => "3000.00",
                "stok" => 23,
                "created_at" => "2023-06-17T15:53:52.000000Z",
                "updated_at" => "2023-06-17T16:08:38.000000Z",
            ],
            [
                "barang_id" => "4da1fe74-be34-46cd-a358-6d5b0879faed",
                "barcode" => "safas",
                "nama_barang" => "Ikan bakar pedas",
                "harga_satuan" => "20000.00",
                "stok" => 12,
                "created_at" => "2023-06-17T15:53:37.000000Z",
                "updated_at" => "2023-06-17T16:12:26.000000Z",
            ],
        ];

        foreach ($barangs as $barang) {
            DB::table('barangs')->insert([
                'barang_id' => $barang['barang_id'],
                'barcode' => $barang['barcode'],
                'nama_barang' => $barang['nama_barang'],
                'harga_satuan' => $barang['harga_satuan'],
                'stok' => $barang['stok'],
                'created_at' => $barang['created_at'],
                'updated_at' => $barang['updated_at'],
            ]);
        }
    }
}
