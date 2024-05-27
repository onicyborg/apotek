<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nota_penjualan', function (Blueprint $table) {
            $table->id();
            $table->decimal('total_all_price', 10,2);
            $table->string('nama_customer');
            $table->string('no_handphone_customer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_penjualan');
    }
};
