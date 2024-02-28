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
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->uuid('category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('demo')->nullable();
            $table->text('sort_description');
            $table->text('description');
            $table->double('price_before_discount');
            $table->double('price_after_discount');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->string('link_telegram')->nullable();
            $table->string('link_whatsapp')->nullable();
            $table->tinyInteger('is_published')->default(0);

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
