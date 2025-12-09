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
        Schema::table('mentors', function (Blueprint $table) {
            // Tambah kolom untuk rating mentor
            $table->integer('rating_total')->default(0);
            $table->integer('rating_count')->default(0);
            $table->float('rating_average')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn(['rating_total', 'rating_count', 'rating_average']);
        });
    }
};
