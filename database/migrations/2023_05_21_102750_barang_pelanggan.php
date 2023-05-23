<?php

use App\Models\pelanggan;
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
        Schema::create("barang_pelanggan", function(Blueprint $table){
            $table->id()->autoIncrement();
            $table->foreignId("pelanggan_id")->constrained(
                table:'pelanggan', indexName:"barang_2barang_id")->onDelete("cascade");
            $table->string("nama_barang", 20)->nullable();
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
        Schema::dropIfExists('barang_pelanggan');
    }
};
