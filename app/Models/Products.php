<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'nama_obat',
        'harga_jual',
        'harga_beli',
        'type',
        'deskripsi',
        'quantity'
    ];

    public function list_product()
    {
        return $this->hasMany(ListProductNota::class, 'product_id', 'id');
    }

}
