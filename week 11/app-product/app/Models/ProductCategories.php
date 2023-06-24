<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductCategories extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'kategori_produk';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',             // Nama kategori produk
    ];

    public function products()
    {
        return $this->hasMany(Produk::class);
    }

    public static function getAllProductCategories()
    {
        $alldata = DB::table('kategori_produk')
            ->select('kategori_produk.*')
            ->get();
        return $alldata;
    }
}
