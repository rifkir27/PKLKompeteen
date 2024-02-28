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
        Schema::create('series', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->uuid('course_id');
            $table->string('title');
            $table->integer('number_of_series');
            $table->boolean('intro')->default(0);
            $table->string('video_code')->nullable();
            $table->text('description')->nullable();

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
        Schema::dropIfExists('series');
    }
};
