<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->enum('beladiri', ['MuayThai', 'Kids Warrior', 'MMA', 'VIP Class']);
            $table->enum('membership', ['Regular', 'Elite', 'VIP']);
            $table->unsignedBigInteger('coach_id');
            $table->timestamps();
        });

        // Tambahkan foreign key setelah semua tabel terbuat
        Schema::table('anggotas', function (Blueprint $table) {
            $table->foreign('coach_id')->references('id')->on('coach');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};