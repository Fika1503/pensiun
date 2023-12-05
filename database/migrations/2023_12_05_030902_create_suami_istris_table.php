<?php

use App\Models\Opd;
use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suami_istris', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete()
                ->nullable()
                ->comment('id table users');
            $table->foreignIdFor(Opd::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete()
                ->nullable()
                ->comment('id table opd');
            $table->foreignIdFor(Pegawai::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete()
                ->nullable()
                ->comment('id table pegawai');
            $table->string('name')
                ->comment('nama suami atau istri');
            $table->string('birth_place')
                ->comment('tempat lahir');
            $table->date('birth_date')
                ->comment('tanggal lahir');
            $table->date('birth_wedd')
                ->comment('tanggal pernikahan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suami_istris');
    }
};
