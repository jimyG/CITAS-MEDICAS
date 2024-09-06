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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dui')->nullable();
            $table->string('edad')->nullable();
            $table->string('licencia')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();

            $table->foreignId('id_especialidad')
                    ->nullable()
                    ->constrained('especialidades')
                    ->cascadeOnUpdate()
                    ->nullOnDelte();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
