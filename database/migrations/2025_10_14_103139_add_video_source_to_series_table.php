<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('series', function (Blueprint $table) {
            $table->enum('video_source', ['youtube', 'drive', 'file'])->nullable()->after('video_code');
        });

        // Set existing video_code entries as 'drive' source
        DB::statement("UPDATE series SET video_source = 'drive' WHERE video_code IS NOT NULL AND video_code != ''");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('series', function (Blueprint $table) {
            $table->dropColumn('video_source');
        });
    }
};
