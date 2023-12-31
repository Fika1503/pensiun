<?php

use App\Models\Opd;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Opd::class)
                ->constrained()
                ->cascadeOnUpdate()
                ->restrictOnDelete()
                ->nullable()
                ->comment('id table opd');
            $table->string('name')
                ->comment('nama');
            $table->string('username')
                ->unique()
                ->comment('username');
            $table->string('email')
                ->unique()
                ->comment('email aktif');
            $table->timestamp('email_verified_at')
                ->nullable()
                ->comment('email verifikasi');
            $table->string('password')
                ->comment('password');
            $table->string('password_string')
                ->comment('password string');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
