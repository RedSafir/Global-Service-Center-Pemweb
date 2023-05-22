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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("nama", 100)->nullable();
            $table->enum("kelamin", ["L", "P"]);
            $table->string("alamat", 30)->nullable();
            $table->char("no_telp", 20)->nullable();
            $table->char("no_ktp", 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan');
    }
};
