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
        Schema::create('photos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->uuid('course_id');
            $table->string('name');
            $table->string('photo');

            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
