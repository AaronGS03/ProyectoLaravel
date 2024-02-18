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
        Schema::create('characters', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('nombre');
            $table->text('apodos')->nullable();
            $table->string('franquicia');
            $table->text('descripcion');
            $table->string('imagen')->nullable();
            $table->string('logo')->nullable();
            $table->string('color')->nullable();
            $table->string('primera_aparicion');
            $table->string('rating_oficial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
