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
        Schema::create('transaksi', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->foreignId("perbaikan_id")->constrained(
                table:"perbaikan",indexName:"perbaikan_transaksi_id")->onDelete("cascade");
            $table->foreignId("pelanggan_id")->constrained(
                table:"pelanggan", indexName:"pelanggan_transaksi_id")->onDelete("cascade");
            $table->string("invoice")->unique()->nullable();
            $table->boolean("status_trans")->nullable();
            $table->boolean("status_pick")->nullable();
            $table->integer("tot_harga")->nullable();
            $table->timestamp("batas_pembayaran")->nullable();
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
