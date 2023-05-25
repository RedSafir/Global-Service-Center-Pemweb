<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id()->autoIncrement();
            // $table->foreignId("perbaikan_id")->constrained(
            //     table:"perbaikan",indexName:"perbaikan_transaksi_id")->onDelete("cascade");
            $table->foreignId("pelanggan_id")->constrained(
                table: "pelanggan",
                indexName: "pelanggan_transaksi_id"
            )->onDelete("cascade");
            $table->foreignId("id_barang_gudang")->constrained(
                table: "barang_gudang",
                indexName: "perbaikan_2gudang"
            )->onDelete("cascade");
            $table->string("nama_barang", 20)->nullable();
            $table->string("kerusakan", 20)->nullable();
            $table->integer("jumlah_butuh")->nullable();
            $table->boolean("status")->nullable();
            $table->string("invoice")->unique()->nullable();
            $table->boolean("status_trans")->nullable();
            $table->boolean("status_pick")->nullable();
            $table->integer("tot_harga")->nullable();
            $table->timestamp("batas_pembayaran")->nullable();
            $table->string("foto_barang", 50)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
