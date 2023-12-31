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
        Schema::create('opds', function (Blueprint $table) {
            $table->id();
            $table->string('code')
                ->comment('kode organisasi');
            $table->string('name')
                ->comment('nama organisasi');
            $table->string('alias')
                ->nullable()
                ->comment('singkatan opd');
            $table->string('address')
                ->nullable()
                ->comment('alamat opd');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opds');
    }
};
