<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaPenjualan extends Model
{
    use HasFactory;

    protected $table = 'nota_penjualan';
    protected $fillable = [
        'total_all_price',
        'nama_customer',
        'no_handphone_customer',
    ];

    public function list_product()
    {
        return $this->hasMany(ListProductNota::class, 'nota_id', 'id');
    }
}
