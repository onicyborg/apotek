<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_products_table.php
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('nama_obat');
        $table->decimal('harga_jual', 10, 2);
        $table->decimal('harga_beli', 10, 2);
        $table->enum('type', ['Tablet', 'Kapsul', 'Sirup', 'Suspensi', 'Oil', 'Pil', 'Krim', 'Salep', 'Gel', 'Plester', 'Inhaler', 'Nebulizer', 'Injeksi', 'Oftalmik', 'Otik', 'Nasal']);
        $table->text('deskripsi');
        $table->integer('quantity');
        $table->text('img');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('products');
}

};
