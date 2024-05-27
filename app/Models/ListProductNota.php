<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListProductNota extends Model
{
    use HasFactory;

    protected $table = 'list_product_nota';
    protected $fillable = [
        'quantity',
        'total_price',
        'nota_id',
        'product_id'
    ];

    public function nota_penjualan()
    {
        return $this->belongsTo(NotaPenjualan::class, 'nota_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
}
