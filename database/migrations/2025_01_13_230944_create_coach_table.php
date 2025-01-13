<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('coach', function (Blueprint $table) {
            $table->id();
            $table->enum('nama', ['Coach Abe','Coach Alex','Coach Jonathan','Coach Samuel']);
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coach');
    }
};