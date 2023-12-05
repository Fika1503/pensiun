<?php

use App\Models\Opd;
use App\Models\User;
use App\Models\PangGol;
use App\Models\Position;
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
        Schema::create('pegawais', function (Blueprint $table) {
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
            $table->foreignIdFor(Position::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete()
                ->nullable()
                ->comment('id table opd');
            $table->foreignIdFor(PangGol::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete()
                ->nullable()
                ->comment('id table opd');
            $table->string('nip')
                ->comment('nip pegawai');
            $table->string('name')
                ->comment('nama pegawai');
            $table->string('address')
                ->comment('alamat pegawai');
            $table->string('birth_place')
                ->comment('tempat lahir');
            $table->date('birth_date')
                ->comment('tanggal lahir');
            $table->string('no_hp')
                ->comment('no hp ');
            $table->date('pensiun_date')
                ->comment('tanggal pensiun');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
