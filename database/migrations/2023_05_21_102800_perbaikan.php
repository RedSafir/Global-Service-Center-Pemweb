<?php

use App\Models\perbaikan;
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
        Schema::create("perbaikan", function(Blueprint $table){
            $table->id();
            $table->foreignId("barang_pelanggan_id")->constrained(
                table:"barang_pelanggan", indexName:"perbaikan_2pelanggan_id")->onDelete("cascade");
            $table->foreignId("barang_gudang_id")->constrained(
                table:"barang_gudang", indexName:"perbaikan_2gudang")->onDelete("cascade");
            $table->boolean("status")->nullable();
            $table->string("kerusakan", 20)->nullable();
            $table->integer("jumlah_butuh")->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perbaikan');
    }
};
