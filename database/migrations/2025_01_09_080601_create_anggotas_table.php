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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->enum('gender', ['Laki-Laki','Perempuan']);
            $table->enum('beladiri', ['Muay Thai','Kids Warrior','MMA','VIP Class']);
            $table->enum('membership', ['Regular','Elite','VIP']);
            $table->enum('coach', ['Alex','Abe','Jonathan','Samuel']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
