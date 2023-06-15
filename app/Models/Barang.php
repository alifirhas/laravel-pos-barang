<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'barangs';
    protected $primaryKey = 'barang_id';
    public $incrementing = false;
    protected $keyType = 'string';
}
