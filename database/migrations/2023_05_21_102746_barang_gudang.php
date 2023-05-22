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
        Schema::create("barang_gudang", function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->string("nama_barang", 20)->nullable();
            $table->string("keterangan", 20)->nullable();
            $table->string("harga", 20)->nullable();
            $table->integer("stock")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_gudang');
    }
};
